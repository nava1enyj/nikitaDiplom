<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        if (Auth::user()->isAdmin == 1){
            return view('admin.index');
        }
        else{
            return redirect()->back();
        }
    }


    public function addProduct(ProductRequest $request){

        if (Auth::user()->isAdmin == 1){
            $path = '';

            if(request()->file('img')){
                $path = request()->file('img')->store('uploads/products','public');
            }

            Product::create([
                'name' => $request['name'],
                'description' => $request['description'],
                'img' => $path,
                'price' => $request['price']
            ]);

            return redirect()->back()->with('success' , 'Товар успешно был добавлен');

        }
        else{
            return redirect()->back();
        }

    }
}
