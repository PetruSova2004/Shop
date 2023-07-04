<?php

namespace App\Http\Controllers\Parsers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Parsers\Services\CategoryParserService;
use App\Models\Category;
use DiDom\Document;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class CategoryParser extends Controller
{
    public function categories_parser() {
        $url = "https://atehno.md/";

        $client = new Client();
        $document = new Document();
        $category_service = new CategoryParserService();
        $file = $category_service->get_html($client, $url);
        $document->loadHtml($file);

        $category_service->create_categories($document, $client, $url);

        return redirect()->route('category.index');
    }
}
