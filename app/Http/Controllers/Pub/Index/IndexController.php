<?php

namespace App\Http\Controllers\Pub\Index;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        $viewedProducts = Product::orderBy('views', 'desc')->take(8)->get();
        return view('Pub.index', compact('viewedProducts'));
    }
}
