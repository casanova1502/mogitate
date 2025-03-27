<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MogitateController extends Controller
{
    public function index()
    {
        return view('products');
    }

    public function search()
    {
        return view('search');
    }

    public function register()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        return view('products');
    }
}
