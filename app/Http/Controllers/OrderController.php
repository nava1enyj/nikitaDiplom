<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $carts = \Cart::session($_COOKIE['cart_id'])->getContent($_COOKIE['cart_id']);
        if (count($carts)<= 0){
            return redirect()->back();
        }
        return view('order.index');
    }
}
