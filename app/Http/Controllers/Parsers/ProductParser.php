<?php

namespace App\Http\Controllers\Parsers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Parsers\Services\ProductParserService;
use App\Http\Services\ProductService;
use App\Http\Controllers\Parsers\Services\Sub_CategoryParserService;
use App\Models\Product;
use App\Models\SubCategory;
use DiDom\Document;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\directoryExists;

class ProductParser extends Controller
{

    public function products_parser()
    {

        ini_set('display_errors', '1');

        set_time_limit(0); // Убираем ограничение времени выполнения скрипта
        ini_set('memory_limit', -1); // неограниченное память для скрипта

        $url = "https://atehno.md/"; // Телефоны

        $client = new Client();
        $document = new Document();
        $product_service = new ProductParserService();
        $file = $product_service->get_html($url, $client);

        if ($file) {
            $document->loadHtml($file);

            $sub_category_service = new Sub_CategoryParserService();
            $sub_category_urls = $sub_category_service->get_all_url($document); //все url из sidebar

            foreach ($sub_category_urls as $item) {
                $sub_category_url = $url . $item;
                $file = $product_service->get_html($sub_category_url, $client);
                $document->loadHtml($file);

                $list_of_titles = $document->find('ul.breadcrumbs__list li.breadcrumbs__item');
                $category_title = trim($list_of_titles[1]->text());
                $path = "/var/www/projects/shop/public/images/{$category_title}";
                if (!file_exists($path) && !is_dir($path)) {
                    mkdir("/var/www/projects/shop/public/images/{$category_title}");
                }

                $x = $document->find('div.row div.col-xs-6 a');

                foreach ($x as $y) {
                    $test = explode('/', $y->attr('href'));
                    if ($test[0] == 'catalog') { // url каталога товаров
                        $product_service->test($url, $y, $category_title, $client, $document);
                    }
                    if ($test[0] == 'spage') {
                        $spage_url = $url . $y->attr('href');
                        $file = $product_service->get_html($spage_url, $client);
                        $document->loadHtml($file);

                        $catalogs_of_spages = $document->find('div.col-xs-6 a');

                        foreach ($catalogs_of_spages as $catalog) {
                            $product_service->test($url, $catalog, $category_title, $client, $document);
                        }
                    }
                }

            }
            return redirect()->route('product.index');
        }
    }


    public function change_sub_category_id()
    {
        $sub_category = SubCategory::find(2); // find() возвращает модель, соответствующую указанному идентификатору, или null, если модель не найдена
        $x = $sub_category->category;

        dd($x->title);
    }


}
