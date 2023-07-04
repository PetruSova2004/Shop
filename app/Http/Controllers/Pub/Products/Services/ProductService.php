<?php

namespace App\Http\Controllers\Pub\Products\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductService extends Controller
{

    public function x()
    {
        dd('sex');
    }
    public function getProductId()
    {
        $url = $_SERVER['REQUEST_URI'];
        $parsedUrl = parse_url($url);
        parse_str($parsedUrl['query'], $queryParams);
        $id = $queryParams['id'];

        return $id;
    }
}
