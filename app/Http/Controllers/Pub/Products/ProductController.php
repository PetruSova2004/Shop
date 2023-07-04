<?php

namespace App\Http\Controllers\Pub\Products;

use App\Facades\CartService;
use App\Facades\CommandService;
use App\Facades\UserService;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Pub\Payments\StripeController;
use App\Http\Controllers\Pub\Products\Services\ProductService;
use App\Mail\MyMail;
use App\Models\Order;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\User;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{

    private $service;

    public function __construct(ProductService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $session_filter = session('filter');
        if (!$session_filter) {
            $products = Product::where('id', '<=', 150)->paginate(15);
            return view('Pub.shop-3-column', compact('products'));
        } else {
            $products = Product::where('title', 'LIKE', '%' . \session('filter') . '%')->paginate(15);
            $this->dropFilter();
            return view('Pub.shop-3-column', compact('products'));
        }
    }

    public function showProduct()
    {
        $id = $this->service->getProductId();
        $product = Product::where('id', $id)->first();
        $product->update([
            'views' => $product->views + 1,
        ]);

        return view('Pub.single-product', compact('product'));
    }

    public function filterProducts(Request $request)
    {
        session()->put('filter', $request->filter);
        return redirect()->route('products.index');
    }

    public function dropFilter()
    {
        session()->forget('filter');
        return true;
    }

    public function test()
    {
        $products = CartService::getUserCart();
        $stripe = new StripeController();

        return $stripe->session($products);
    }

    public function redirectToProvider()
    {
        session()->forget('authorize');
        session()->put('authorize', true);
        return Socialite::driver('google')->redirect();
    }

    public function handleCallback()
    {
        $user = Socialite::driver('google')->user();
        $google_user = User::where('google_id', $user->getId())->first();

        if ($google_user) {
            Auth::login($google_user);
            return redirect()->route('home')->with('success', "Welcome back {$google_user->email}");
        } else {
            $created_user = User::create([
                'google_id' => $user->getId(),
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'password' => UserService::generateRandomPassword(),
            ]);
            Auth::login($created_user);

            return redirect()->route('home')->with('success', "Welcome {$created_user->email}");
        }

    }

}
