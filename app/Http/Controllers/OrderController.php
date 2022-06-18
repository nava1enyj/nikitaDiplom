<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Adress;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $carts = \Cart::session($_COOKIE['cart_id'])->getContent($_COOKIE['cart_id']);
        if (count($carts) <= 0) {
            return redirect()->back();
        }
        return view('order.index');
    }

    public function ordersUser(){
        $orders = Order::where('user_id' , \Auth::user()->id)->get();

        return view('order.orders-user', ['orders' => $orders]);
    }

    public function addOrder(OrderRequest $request)
    {
        $carts = \Cart::session($_COOKIE['cart_id'])->getContent($_COOKIE['cart_id']);

        $adress = Adress::create([
            'city' => $request->city,
            'street' => $request->street,
            'number_home' => $request->number_house,
            'number_entrance' => $request->number_entrance,
            'number_apartment' => $request->number_apartment,
            'full_adress' => $request->full_address,
            'index' => $request->index
        ]);
        foreach ($carts as $cart) {




            $order = Order::create([
                'user_id' => \Auth::user()->id,
                'product_id' => $cart->id,
                'adress_id' => $adress->id,
                'quantity' => $cart->quantity,
                'price' => $cart->getPriceSum(),
                'status' => 0
            ]);


        }


        \Cart::session($_COOKIE['cart_id'])->clear();

        return redirect(route('orders-user'));

    }
}
