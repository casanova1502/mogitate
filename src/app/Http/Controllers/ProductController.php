<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('index', compact('products'));
    }

    // public function search()
    // {
    //     return view('search');
    // }

    // public function register()
    // {
    //     return view('register');
    // }

    // public function 

    // public function store(ProductRequest $request)
    // {
    //     $product = $request->only([
    //         'name',
    //         'price',
    //         'image',
    //         'description'
    //     ]);
    //     Product::create($product);
        
    //     return redirect('/products');
    // }

    // public function update(ProductRequest $request)
    // {
    //     $product = $request->only([
    //         'name',
    //         'price',
    //         'image',
    //         'description'
    //     ]);
    //     Product::find($request->id)->update($product);

    //     return view('products',compact('product'));
    // }    
}
