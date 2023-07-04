<?php

namespace App\Http\Controllers\Parsers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Parsers\Services\Sub_CategoryParserService;
use App\Models\SubCategory;
use DiDom\Document;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Sub_CategoryParser extends Controller
{
    public function sub_category_parser()
    {
        $url = "https://atehno.md/";

        $client = new Client();
        $document = new Document();
        $sub_category_service = new Sub_CategoryParserService();
        $file = $sub_category_service->get_html($url, $client);
        $document->loadHtml($file);

        $sub_categories = $sub_category_service->get_all_subcategories($document, $client, $url);
        $sub_category_service->insert_sub_categories($sub_categories);

        return redirect()->route('sub_category.index');

    }

    public function update_parsed_data()
    {
        $url = "https://atehno.md/";

        $client = new Client();
        $document = new Document();
        $sub_category_service = new Sub_CategoryParserService();
        $file = $sub_category_service->get_html($url, $client);
        $document->loadHtml($file);

        $db_sub_categories = SubCategory::all();
        $parsed_sub_categories = $sub_category_service->get_all_subcategories($document, $client, $url);
        $sub_category_service->update_sub_categories($db_sub_categories, $parsed_sub_categories);

        return redirect()->route('sub_category.index');
    }

}
