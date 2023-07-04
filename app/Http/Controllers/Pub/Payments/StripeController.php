<?php

namespace App\Http\Controllers\Pub\Payments;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pub\Checkout\StoreRequest;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;


class StripeController extends Controller
{

    public function showPaymentForm()
    {
        return view('Pub.stripe-payment');
    }

    public function session($products)
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $lineItems = [];

        foreach ($products as $product) {
            $lineItems[] = [
                'price_data' => [
                    'currency' => 'USD',
                    'product_data' => [
                        "name" => $product->title,
                    ],
                    'unit_amount' => $product->price,
                ],
                'quantity' => 1,
            ];
        }

        $session = \Stripe\Checkout\Session::create([
            'line_items' => $lineItems,
            'mode' => 'payment',
            'success_url' => route('home'),
            'cancel_url' => route('checkout'),
        ]);

        return redirect()->away($session->url);
    }

    public function success()
    {
        return redirect()->route('home')->with('success', 'Payment was successful');
    }

}
