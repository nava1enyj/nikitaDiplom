<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/catalog', [\App\Http\Controllers\CatalogController::class, 'index'])->name('catalog');

Route::get('/whereWe', function () {
    return view('where-we.index');
})->name('where-we');

Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->middleware('auth')->name('admin');
Route::get('/adminDelProduct/{id}', [\App\Http\Controllers\AdminController::class, 'delProduct'])->middleware('auth')->name('del-product');
Route::get('/adminOneOrder/{id}', [\App\Http\Controllers\AdminController::class, 'OneOrderShow'])->middleware('auth')->name('admin-one-order');
Route::get('/adminOneOrderVp/{id}', [\App\Http\Controllers\AdminController::class, 'vP'])->middleware('auth')->name('v-p');
Route::get('/adminOneOrderVd/{id}', [\App\Http\Controllers\AdminController::class, 'vD'])->middleware('auth')->name('v-d');
Route::post('/adminAddProduct', [\App\Http\Controllers\AdminController::class, 'addProduct'])->middleware('auth')->name('add-product');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cart', [\App\Http\Controllers\CartController::class, 'index'])->name('cart')->middleware('auth');

Route::post('/addToCart', [\App\Http\Controllers\CartController::class, 'addToCart'])->middleware('auth')->name('add-to-cart');

Route::get('/removeAllCart', [\App\Http\Controllers\CartController::class, 'removeAllCart'])->middleware('auth')->name('remove-all-cart');
Route::get('/removeOneProduct/{id}', [\App\Http\Controllers\CartController::class, 'removeOneProduct'])->middleware('auth')->name('remove-one-product');
Route::get('/order', [\App\Http\Controllers\OrderController::class, 'index'])->middleware('auth')->name('order');
Route::post('orderAdd', [\App\Http\Controllers\OrderController::class, 'addOrder'])->middleware('auth')->name('order-add');
Route::get('/product/{id}', [\App\Http\Controllers\ProductController::class, 'index'])->middleware('auth')->name('one-product');
Route::get('/ordersUser', [\App\Http\Controllers\OrderController::class, 'ordersUser'])->middleware('auth')->name('orders-user');

