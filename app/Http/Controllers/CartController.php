<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){





        return view('cart.index');
    }

    public function addToCart(Request $request){
        $product = Product::where('id', $request->id)->first();

        if (!isset($_COOKIE['cart_id'])) setcookie('cart_id', uniqid());
        $cart_id = $_COOKIE['cart_id'];
        \Cart::session($cart_id);

        \Cart::add(array(
            'id' => $product->id, // inique row ID
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => (int)$request->number,
            'attributes' => [
                'img' => $product->img
            ]
        ));
        return response()->json(\Cart::getContent());
    }


    public function removeAllCart(){

        \Cart::session($_COOKIE['cart_id'])->clear();
        return redirect()->back()->with('success' , 'Вы успешно очистили всю корзину');
    }

    public function removeOneProduct($id){

        \Cart::session($_COOKIE['cart_id'])->remove($id);
        return redirect()->back()->with('success' , 'Вы успешно удалили товар из корзины');
    }
}
