<?php

namespace App\Http\Controllers\Parsers\Services;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use DiDom\Document;
use DiDom\Exceptions\InvalidSelectorException;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Sub_CategoryParserService extends Controller
{
    public function get_html($url, Client $client)
    {
        $resp = $client->get($url);
        return $resp->getBody()->getContents();
    }


    public function get_all_subcategories(Document $document, Client $client, $url): array
    {
        $urls = $this->get_all_url($document);
        $sub_categories = [];

        foreach ($urls as $item) {
            $x = $url . $item;
            $file = $this->get_html($x, $client);
            $document->loadHtml($file);

            $bread_crumbs_li = $document->find('ul.breadcrumbs__list li');
            $title = $bread_crumbs_li[1]->first('span')->text(); // $title будет название категории
            dump("Получаем под-категории из {$title}");

            $elements = $document->find('h4.thumb_title');
            $x = [];
            foreach ($elements as $item) { // $item попадают имя под-категории
                $x[] = $item->text();
            }
            $sub_categories[$title] = $x;
        }
        return $sub_categories;

    }

    public function get_all_url(Document $document): array
    {
        $li = $document->find('div.nav-catalog_categories li.nav-catalog_submenu-toggle');
        $urls = [];

        foreach ($li as $item) {
            $urls[] = $item->first('a')->attr('href');
        }
        return $urls;
    }

    public function insert_sub_categories($sub_categories)
    {
        foreach ($sub_categories as $k => $item) { // category => array(0 => subcategory)
            $category = DB::table('categories')->where('title', $k)->first();
            if ($category) {
                $category_id = $category->id;
                foreach ($item as $x) {
                    if (SubCategory::where('title', $x)->first() == null) {
                        SubCategory::create([
                            'title' => $x,
                            'category_id' => $category_id,
                        ]);
                    }
                }
            }
        }
    }

    public function update_sub_categories($db_sub_categories, $parsed_sub_categories)
    {
        foreach ($parsed_sub_categories as $k => $item) { // category => array(0 => subcategory)
            $category = DB::table('categories')->where('title', $k)->first();
            foreach ($db_sub_categories as $db_sub_category) {
                if ($db_sub_category->category_id == $category->id) {
                    if (!in_array($db_sub_category->title, $item)) {
                        // Если в БД есть запись которую мы не получили при парсинге мы ее удалим
                        DB::table('sub_categories')->where('id', $db_sub_category->id)->delete();
                    }
                }
            }

            foreach ($item as $sub_category) {
                $exists = DB::table('sub_categories')->where('title', $sub_category)->exists();
                if (!$exists) {
                    SubCategory::create([
                        'title' => $sub_category,
                        'category_id' => $category->id,
                    ]);
                }
            }
        }
    }


}
