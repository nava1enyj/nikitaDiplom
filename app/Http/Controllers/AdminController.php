<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function delProduct($id)
    {
        if (\Auth::user()->isAdmin == 1) {
            $product = Product::find($id);
            $orders = Order::where('product_id' , $product->id)->get();
            foreach ($orders as $order) {
                $order->delete();
            }

            $product->delete();

            return redirect()->back()->with('success' , 'Товар успешно был удален');

        } else {
            return redirect()->back();
        }
    }


    public function index()
    {
        if (Auth::user()->isAdmin == 1) {


            $orders = Order::all();
            return view('admin.index', ['orders' => $orders]);
        } else {
            return redirect()->back();
        }
    }


    public function addProduct(ProductRequest $request)
    {

        if (Auth::user()->isAdmin == 1) {
            $path = '';

            if (request()->file('img')) {
                $path = request()->file('img')->store('uploads/products', 'public');
            }

            Product::create([
                'name' => $request['name'],
                'description' => $request['description'],
                'img' => $path,
                'price' => $request['price']
            ]);

            return redirect()->back()->with('success', 'Товар успешно был добавлен');

        } else {
            return redirect()->back();
        }

    }

    public function OneOrderShow($id)
    {
        if (\Auth::user()->isAdmin == 1) {


            $orders = Order::where('user_id', $id)->get();
            return view('admin.one-order-show', ['orders' => $orders]);
        } else {
            return redirect()->back();
        }
    }


    public function vP($id)
    {
        $order = Order::find($id);

        $order->status = 1;
        $order->save();
        return redirect()->back()->with('success', 'Статус успешно был изменен');

    }

    public function vD($id)
    {

        $order = Order::find($id);
        $order->status = 2;
        $order->save();
        return redirect()->back()->with('success', 'Статус успешно был изменен');
    }
}
