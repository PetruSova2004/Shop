<?php

namespace App\Http\Controllers\Pub\Cart;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Facades\CartService;

class CartController extends Controller
{

    public function index()
    {
        $products = CartService::getUserCart();
        $x = Cart::all();
        $carts = [];

        return view('Pub.cart', compact('products'));
    }

    public function addToCart(Product $product)
    {
        $x = Cart::where('product_id', $product->id)->where('user_id', Auth::user()->id)->first();
        if ($product->count >= 1) {
            $product->count = $product->count - 1;
            $product->save();
            if ($x) {
                $x->product_count = $x->product_count + 1;
                $x->save();
                return redirect()->back();
            } else {
                if (DB::table('carts')->insert([
                    'product_id' => $product->id,
                    'user_id' => Auth::user()->id,
                    'product_count' => 1,
                ])) {
                    return redirect()->back()->with('success', "Product {$product->id} has been added to cart");
                } else {
                    return dd('pula');
                }
            }
        } else {
            return redirect()->back()->with('error', 'Sorry, but there is no more such products in stock');
        }
    }

    public function deleteAllCartProducts()
    {
        if (Cart::where('user_id', Auth::user()->id)->delete()) {
            return redirect()->back();
        }
    }

    public function deleteCartProduct($product_id)
    {
        $cart_product = Cart::where('product_id', $product_id)->where('user_id', Auth::user()->id)->first();
        $product = Product::where('id', $product_id)->first();

        if ($cart_product->product_count > 1) {
            $cart_product->product_count = $cart_product->product_count - 1;
            $cart_product->save();
            $product->count = $product->count + 1;
            $product->save();
        } else {
            $cart_product->delete();
            $product->count = $product->count + 1;
            $product->save();
        }
        return redirect()->back()->with('success', "Product {$product->id} has been removed from cart");
    }


}
