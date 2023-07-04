<?php

namespace App\Http\Controllers\Parsers\Services;

use App\Http\Controllers\Controller;
use App\Models\Product;
use DiDom\Document;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ProductParserService extends Controller
{
    public function get_html($url, Client $client)
    {
        $resp = $client->get($url);
        return $resp->getBody()->getContents();
    }

    public function get_product(Document $document, Client $client, $url, $category_title)
    {
        $file = $this->get_html($url, $client);
        $document->loadHtml($file);

        static $image_count = 1;

        $price = $document->first('div.product-body span.amount')->text(); // 427лей сюда попадет
        $x = explode('л', $price);// разделим строку на массив через разделитель 'л'

        $product['price'] = (int)$x[0];
        $product['title'] = trim($document->first('h2.product-title')->text());
        $product['description'] = trim($document->first('div.col-xs-12 p i')->text());
        $product['content'] = "Temporary Content";

        // Images
        $imageURL = $document->first('div.product-carousel-wrapper a')->attr('href');
        $savePath = "/var/www/projects/shop/public/images/$category_title/$category_title" . $image_count . $this->get_ext($imageURL);
        $this->curl_image_get($imageURL, $savePath);
        $ext = $category_title . $image_count . "." . $this->get_ext($imageURL);
        $image_count++;

        $product['image'] = "images/{$category_title}/{$ext}";
        return $product;
    }

    public function create_product($products_data)
    {
        foreach ($products_data as $k => $item) {
            if (Product::where('title', $item['title'])->first() == null) {
                Product::create([
                    'title' => mb_substr($item['title'], 0, 100),
                    'description' => $item['description'],
                    'content' => $item['content'],
                    'preview_image' => $item['image'],
                    'price' => $item['price'],
                    'count' => 1,
                    'is_published' => 1,
                    'sub_category_id' => 1,
                ]);
            }
        }
    }

    public function get_max_page_count(Document $document)
    {
        $max_page_btn = $document->find('ul.pagination li');
        foreach ($max_page_btn as $item) {
            if ($item->find('i.fa')) {
                $x = explode('/', $item->first('a')->attr('href'));
                return intval(end($x));
            }
        }
    }

    public function get_ext($url)
    {
        $data = explode('.', $url);
        $data = explode('?', end($data)); // jpg?c=1

        return $data[0]; // jpg
    }


    public function test($url, $y, $category_title, Client $client, Document $document)
    {
        for ($i = 1; $i <= 1; $i++) {
            $products_url = $url . $y->attr('href') . "/page/{$i}";
            $file = $this->get_html($products_url, $client);
            $document->loadHtml($file);

            $products = $document->find('article.product-item h3 a');
            $products_data = [];
            foreach ($products as $k => $product) {
                sleep(rand(1, 2));
                $product_url = $product->attr('href');
                $file = $this->get_html($product_url, $client);
                $document->loadHtml($file);

                $x = $this->get_product($document, $client, $product_url, $category_title);
                $products_data[] = $x;
                dump("{$k} товар парсится");
            }
            $this->create_product($products_data);
        }
    }

    public function curl_image_get($imageURL, $savePath)
    {
        $ch = curl_init($imageURL); // curl_init() нужен для инициализации сеанса cURL
        $fp = fopen($savePath, 'wb'); // fopen() для создания файла

        curl_setopt($ch, CURLOPT_FILE, $fp); // curl_setopt() для настройки параметров запроса
        curl_setopt($ch, CURLOPT_HEADER, 0);

        curl_exec($ch); // curl_exec() для выполнения запроса
        curl_close($ch); // curl_close() для закрытия сеанса
        fclose($fp); // fclose() для закрытия файла

    }



}
