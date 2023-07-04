<?php

namespace App\Http\Controllers\Pub\User\Services;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserService extends Controller
{
    public function getUserOrders()
    {
        $user = Auth::user();
        $orders = $user->orders;

        return $orders;
    }

    public function getOrderPrice($order)
    {
        $products_ids = DB::table('product_order')->where('order_id', $order->id)->pluck('product_id');
        $products = [];
        $price = 0;
        foreach ($products_ids as $key => $value) {
            $products[] = Product::where('id', $value)->first();
        }
        foreach ($products as $product) {
            $price += $product->price;
        }

        return $price;
    }

    public function generateRandomPassword()
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = substr(str_shuffle($characters), 0,25);
        // Мы сначала перемешиваем символы с помощью str_shuffle(), а затем выбираем первые 8 символов с помощью substr().
        return $randomString;
    }

}
