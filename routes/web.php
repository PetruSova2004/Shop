<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Pub\Checkout\CheckoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'App\Http\Controllers\Pub\Index\IndexController@index')->name('home');

Route::get('/download', 'App\Http\Controllers\TestDownload@testDownload')->name('download');

Route::get('/stripe', 'App\Http\Controllers\Pub\Payments\StripeController@showPaymentForm')->name('checkout');
Route::post('/session', 'App\Http\Controllers\Pub\Payments\StripeController@session')->name('session');
Route::get('/success', 'App\Http\Controllers\Pub\Payments\StripeController@success')->name('success');


Route::get('/auth', 'App\Http\Controllers\Pub\Auth\AuthController@authView')->name('auth');
Route::post('/auth/register', 'App\Http\Controllers\Pub\Auth\AuthController@register')->name('register');
Route::post('/auth/login', 'App\Http\Controllers\Pub\Auth\AuthController@login')->name('login');


Route::get('/products/{products?}', 'App\Http\Controllers\Pub\Products\ProductController@index')->name('products.index');
Route::get('/product', 'App\Http\Controllers\Pub\Products\ProductController@showProduct')->name('products.show');
Route::post('/filtered/x', 'App\Http\Controllers\Pub\Products\ProductController@filterProducts')->name('products.filter');
Route::get('/product/dropFilter', 'App\Http\Controllers\Pub\Products\ProductController@dropFilter')->name('products.dropFilter');

Route::get('/test', 'App\Http\Controllers\Pub\Products\ProductController@test')->name('products.test');

Route::get('/socialite', 'App\Http\Controllers\Pub\Products\ProductController@redirectToProvider')->name('socialite');
Route::get('/socialiteCallback', 'App\Http\Controllers\Pub\Products\ProductController@handleCallback')->name('socialite.callback');



Route::get('/wishlist', 'App\Http\Controllers\Pub\WishList\WishListController@index')->name('wishlist.index');
Route::get('/wishlist/{id}', 'App\Http\Controllers\Pub\WishList\WishListController@addToWishlist')->name('wishlist.add');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/user', 'App\Http\Controllers\Pub\User\UserController@index')->name('pub.user.index');
    Route::post('/user-details', 'App\Http\Controllers\Pub\User\UserController@userDetails')->name('pub.user.details');


    Route::get('/cart', 'App\Http\Controllers\Pub\Cart\CartController@index')->name('cart.index');
    Route::get('/cartAdd/{product}', 'App\Http\Controllers\Pub\Cart\CartController@addToCart')->name('cart.add');
    Route::get('/cartDeleteAll', 'App\Http\Controllers\Pub\Cart\CartController@deleteAllCartProducts')->name('carts.delete');
    Route::get('/cartDelete/{id}', 'App\Http\Controllers\Pub\Cart\CartController@deleteCartProduct')->name('cart.delete');

    Route::get('/checkout', 'App\Http\Controllers\Pub\Checkout\CheckoutController@index')->name('checkout.index');
    Route::post('/checkout/add', 'App\Http\Controllers\Pub\Checkout\CheckoutController@storeOrder')->name('checkout.store');
    Route::get('/checkout/mailConfirmation', 'App\Http\Controllers\Pub\Checkout\CheckoutController@mailConfirmation')->name('checkout.mailConfirmation');
    Route::get('/checkout/delete/{id}', 'App\Http\Controllers\Pub\Checkout\CheckoutController@deleteOrder')->name('checkout.delete');

    Route::post('/checkout-webhook', 'App\Http\Controllers\Pub\Checkout\CheckoutController@handleStripeWebhook')->name('checkout.webhook');


    Route::get('/auth/logout', 'App\Http\Controllers\Pub\Auth\AuthController@logout')->name('logout');

});


Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/', \App\Http\Controllers\Main\IndexController::class)->name('index');

    Route::resource('/user', 'App\Http\Controllers\User\UserController', [
        'names' => [
            'index' => 'user.index',
            'create' => 'user.create',
            'store' => 'user.store',
            'show' => 'user.show',
            'edit' => 'user.edit',
            'update' => 'user.update',
            'destroy' => 'user.destroy',
        ]
    ]);

    Route::resource('/categories', 'App\Http\Controllers\Category\CategoryController', [
        'names' => [
            'index' => 'category.index',
            'create' => 'category.create',
            'store' => 'category.store',
            'show' => 'category.show',
            'edit' => 'category.edit',
            'update' => 'category.update',
            'destroy' => 'category.destroy',
        ]
    ]);

    Route::resource('/sub_categories', 'App\Http\Controllers\Sub_Category\Sub_CategoryController', [
        'names' => [
            'index' => 'sub_category.index',
            'create' => 'sub_category.create',
            'store' => 'sub_category.store',
            'show' => 'sub_category.show',
            'edit' => 'sub_category.edit',
            'update' => 'sub_category.update',
            'destroy' => 'sub_category.destroy',
        ]
    ]);

    Route::resource('/product', 'App\Http\Controllers\Product\ProductController', [
        'names' => [
            'index' => 'product.index',
            'create' => 'product.create',
            'store' => 'product.store',
            'show' => 'product.show',
            'edit' => 'product.edit',
            'update' => 'product.update',
            'destroy' => 'product.destroy',
        ]
    ]);

    Route::resource('/tag', 'App\Http\Controllers\Tag\TagController', [
        'names' => [
            'index' => 'tag.index',
            'create' => 'tag.create',
            'store' => 'tag.store',
            'show' => 'tag.show',
            'edit' => 'tag.edit',
            'update' => 'tag.update',
            'destroy' => 'tag.destroy',
        ]
    ]);

    Route::resource('/color', 'App\Http\Controllers\Color\ColorController', [
        'names' => [
            'index' => 'color.index',
            'create' => 'color.create',
            'store' => 'color.store',
            'show' => 'color.show',
            'edit' => 'color.edit',
            'update' => 'color.update',
            'destroy' => 'color.destroy',
        ]
    ]);

    Route::get('/productparser', '\App\Http\Controllers\Parsers\ProductParser@products_parser')->name('product.parser');

    Route::get('/categoryparser', '\App\Http\Controllers\Parsers\CategoryParser@categories_parser')->name('category.parser');

    Route::get('/sub_categoryparser', '\App\Http\Controllers\Parsers\Sub_CategoryParser@sub_category_parser')->name('sub_category.parser');
    Route::get('/sub_categoryparser_update', '\App\Http\Controllers\Parsers\Sub_CategoryParser@update_parsed_data')->name('sub_category.parser_update');
});


