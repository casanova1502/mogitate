<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Season;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::simplePaginate(6);;

        return view('index', compact('products'));
    }

    public function create()
    {
        return view('register');
    }
    
    public function store(ProductRequest $request)
    {
        $product = $request->only([
            'name',
            'price',
            'image',
            'description'
        ]);
        Product::create($product);
        
        return redirect('/products');
    }

    public function find()
    {
        return view('find',['input' => '']);
    }
    
    public function search(Request $request)
    {
        $product = Product::where('name', 'LIKE',"%{$request->input}%")->first();
        $param = [
            'input' => $request->input,
            'product' => $product
        ];
        
        return view('find', $param);
    }

    public function bind(Product $product)
    {
        $data = [
            'product'=>$product,
        ];
        return view('find', $data);
    } 

    public function edit(Request $request)
    {
        $product = $request->only([
            'name',
            'price',
            'image',
            'description'
        ]);

        return view('edit',compact('product'));
    }

    public function update(ProductRequest $request)
    {
        $product = $request->only([
            'name',
            'price',
            'image',
            'description'
        ]);
        Product::find($request->id)->update($product);

        return redirect('/products',compact('product'));
    }
    
    public function destroy(Request $request)
    {
        Todo::find($request->id)->delete();
        return redirect('/');
    }

}
