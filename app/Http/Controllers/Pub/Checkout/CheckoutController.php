<?php

namespace App\Http\Controllers\Pub\Checkout;

use App\Facades\CartService;
use App\Facades\CheckoutService;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Pub\Payments\StripeController;
use App\Http\Requests\Pub\Checkout\StoreRequest;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function index()
    {
        $products = CartService::getUserCart();
        $totalPrice = 0;
        foreach ($products as $product) {
            $totalPrice += $product->price;
        }
        $countries = DB::table('country')->get()->all();
        return view('Pub.checkout', compact('products', 'totalPrice', 'countries'));
    }

    public function storeOrder(StoreRequest $request)
    {
        $request->validated();
        $stripe = new StripeController();
        if (CheckoutService::insertOrder($request)) {
            $products = Cache::get('cart-products');
            return $stripe->session($products);
        }
    }

    public function deleteOrder($id)
    {
        $order = Order::find($id);
        CheckoutService::addProductCount($order);
        $email = Auth::user()->email;
        if ($email == $order->email) {
            DB::table('orders')->where('id', $id)->delete();
            DB::table('product_order')->where('id', $id)->delete();



            CheckoutService::mailCancel($email, $order);

            return redirect()->back()->with('success', 'Order has been deleted successfully');
        } else {
            dd('pula');
        }
    }

    public function mailConfirmation()
    {
        $user = Auth::user();
        $order = Order::where('email', $user->email)->where('user_id', $user->id)->latest()->first();
        $order->is_confirmed = 1;
        if ($order->save()) {
            return redirect()->route('home')->with('success', 'Your order has been confirmed');
        }
    }

    public function handleStripeWebhook(Request $request)
    {
        $payload = $request->getContent();
        $sig_header = $request->header('Stripe-Signature');
        $stripe_secret = env('STRIPE_WEBHOOK_SECRET');

        try {
            $event = \Stripe\Webhook::constructEvent($payload, $sig_header, $stripe_secret);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], Response::HTTP_BAD_REQUEST);
        }

        // Обработка событий Stripe
        switch ($event->type) {
            case 'payment_intent.succeeded':
                return redirect()->route('home')->with('success', 'Ahuitelina bro');
                break;
            case 'payment_intent.payment_failed':
                return dd('payment failed');
                break;
            // Другие типы событий, которые вы хотите обработать
        }

        return response()->json(['status' => 'success']);
    }

}
