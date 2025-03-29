@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<form action="/products/register" method="post">
    @csrf
    <h1>商品紹介</h1>
    <button type="submit">+ 商品を追加</button>
</form>
<form action="/products/search" method="post">
    @csrf
    <input type="search" id="product-search" name="search">
    <button type="submit">検索</button>
    <h2>価格順で表示</h2>
    <select name=order>
        <option value=""></option>
    </select>
</form>
@foreach ($products as $product)
<tr>
    <td>
        <form action="/products/{productId}" method="get">
        <img src="{{ $product['image'] }}" alt="">
        <p>{{ $product['name'] }}</p>
        <p>{{ $product['price'] }}</p>
        </form>
    </td>
</tr>
@endforeach

@endsection