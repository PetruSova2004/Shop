<?php


namespace App\Http\Controllers\Parsers\Services;

use App\Http\Controllers\Controller;
use App\Models\Category;
use DiDom\Document;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class CategoryParserService extends Controller
{
    public function get_html(\GuzzleHttp\Client $client, $url)
    {
        $resp = $client->get($url);
        return $resp->getBody()->getContents();
    }

    public function create_categories(Document $document, Client $client, $url)
    {
        $categories = $document->find('div.nav-catalog_categories ul li.nav-catalog_submenu-toggle');
        foreach ($categories as $category) {
            $category_url = $url . $category->first('a')->attr('href');
            $file = $this->get_html($client, $category_url);
            $document->loadHtml($file);
            $bread_crumbs_li = $document->find('ul.breadcrumbs__list li');
            $title = $bread_crumbs_li[1]->first('span')->text(); // $title будет название категории
            if (Category::where('title', $title)->first() == null) {
                Category::create([
                    'title' => $title,
                ]);
            }
        }
    }


}




