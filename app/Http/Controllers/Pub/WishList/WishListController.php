<?php

namespace App\Http\Controllers\Pub\WishList;

use App\Facades\WishListService;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    public function index()
    {
        $products = session('wishListProducts');
        return view('Pub.wishlist', compact('products'));
    }

    public function addToWishlist($id)
    {
        WishListService::addProduct($id);
        return redirect()->back();
    }
}
