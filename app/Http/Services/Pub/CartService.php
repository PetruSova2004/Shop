<?php

namespace App\Http\Services\Pub;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartService extends Controller
{
    public function getUserCart()
    {
        $carts = Cart::where('user_id', Auth::user()->id)->get();
        $ids = [];
        $products = [];
        foreach ($carts as $cart) {
            $ids[$cart->product_id] = $cart->product_count;
        }
        foreach ($ids as $k => $value) {
            for ($i = 1; $i <= $value; $i++) {
                $products[] = Product::where('id', $k)->first();
            }
        }
        return $products;
    }



}
