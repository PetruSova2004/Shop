<?php

namespace App\Http\Controllers\Pub\Checkout\Services;

use App\Facades\CartService;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Pub\Payments\StripeController;
use App\Http\Requests\Pub\Checkout\StoreRequest;
use App\Mail\CancelCheckoutMail;
use App\Mail\CheckoutConfirmationMail;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class CheckoutService extends Controller
{
    public function insertOrder(StoreRequest $request)
    {
        $id = Auth::user()->id;
        $products = CartService::getUserCart();

        if (Auth::user()->email === $request->email) {
            $order = Order::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'user_id' => $id,
                'company' => $request->company,
                'country' => $request->country,
                'address' => $request->address,
                'city' => $request->city,
                'phone' => $request->phone,
                'additional-information' => $request->additional_information,
            ]);

            foreach ($products as $product) {
                $existProduct = DB::table('product_order')->where('order_id', $order->id)->where('product_id', $product->id)->first();
                if ($existProduct) {
                    $existProduct->product_count = $existProduct->product_count + 1;

                    DB::table('product_order')->where('order_id', $order->id)->where('product_id', $product->id)->update([
                        'product_count' => $existProduct->product_count,
                    ]);

                } else {
                    DB::table('product_order')->insert([
                        'order_id' => $order->id,
                        'product_id' => $product->id,
                        'product_count' => 1,
                    ]);
                }
            }

            Cache::put('cart-products', $products);

            Cart::where('user_id', Auth::user()->id)->delete();

//            $this->sendMailConfirmation($request);

            return true;
        } else {
            return dd('Email doesnt match');
        }
    }

    public function sendMailConfirmation(StoreRequest $request)
    {
        if (Mail::to($request->email)->send(new CheckoutConfirmationMail())) {
            return true;
        } else {
            dd('Email sending problems');
        }
    }

    public function mailCancel($email, $order)
    {
        Mail::to($email)->send(new CancelCheckoutMail($order));
    }

    public function addProductCount($order)
    {
        $order_products = DB::table('product_order')->where('order_id', $order->id)->get();
        foreach ($order_products as $order) {
            $product = Product::where('id', $order->product_id)->first();
            $product->count += $order->product_count;
            $product->save();
        }
        return true;
    }



}
