<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{

    public function list(){
        return Product::all();
    }

    public function store(Request $request){
        $product = new Product();
        $product->name = $request->name;
        $product->category = $request->category;
        $product->price = $request->price;
        if($product->save()){
            return ['result' => 'success', "mess"=>$product];
        }
    }

    public function update(Request $request){
        $product = Product::find($request->id);
        $product->name = $request->name;
        $product->category = $request->category;
        $product->price = $request->price;

        if($product->save()){
            return ['result' => 'success', "mess"=>$product];
        }
    }
}
