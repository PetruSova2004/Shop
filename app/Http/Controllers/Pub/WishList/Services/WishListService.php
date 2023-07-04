<?php

namespace App\Http\Controllers\Pub\WishList\Services;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class WishListService extends Controller
{
    public function addProduct($id)
    {
        $product = Product::where('id', $id)->first();

        $products = session('wishListProducts');
        session()->forget('wishListProducts');
        $products[] = $product;
        session()->put('wishListProducts', $products);
    }
}
