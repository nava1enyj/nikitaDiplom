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

Route::get('/catalog' , [\App\Http\Controllers\CatalogController::class , 'index'])->name('catalog');

Route::get('/whereWe' , function (){
   return view('where-we.index');
})->name('where-we');

Route::get('/admin' , [\App\Http\Controllers\AdminController::class , 'index'])->middleware('auth')->name('admin');
Route::post('/adminAddProduct' ,[\App\Http\Controllers\AdminController::class , 'addProduct'])->middleware('auth')->name('add-product');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cart', [\App\Http\Controllers\CartController::class , 'index'])->name('cart')->middleware('auth');

Route::post('/addToCart' , [\App\Http\Controllers\CartController::class, 'addToCart'])->middleware('auth')->name('add-to-cart');

Route::get('/removeAllCart' , [\App\Http\Controllers\CartController::class, 'removeAllCart'])->middleware('auth')->name('remove-all-cart');
Route::get('/removeOneProduct/{id}' , [\App\Http\Controllers\CartController::class, 'removeOneProduct'])->middleware('auth')->name('remove-one-product');
Route::get('/order', [\App\Http\Controllers\OrderController::class, 'index'])->middleware('auth')->name('order');
Route::get('/product/{id}' , [\App\Http\Controllers\ProductController::class , 'index'])->middleware('auth')->name('one-product');

