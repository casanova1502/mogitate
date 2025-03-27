@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<a href="/products">商品一覧</a>
<a>>キウイ</a>
<form action="/products" method="post">
    @csrf
    <input type="img" src="" alt="？">
    <span>商品名</span>
    <input type="text" placeholder="商品名を入力">

    <span>値段</span>
    <input type="number" placeholder="値段を入力">

    <span>季節</span>
    <input type="radio" id="seasonChoice1" name="season" value="spring">
    <label for="seasonChoice1">春</label>
    <input type="radio" id="seasonChoice2" name="season" value="summer">
    <label for="seasonChoice2">夏</label>
    <input type="radio" id="seasonChoice3" name="season" value="autumn">
    <label for="seasonChoice3">秋</label>
    <input type="radio" id="seasonChoice4" name="season" value="winter">
    <label for="seasonChoice3">冬</label>

    <span>商品紹介</span>
    <textarea name="content" placeholder="商品の説明を入力"></textarea>

    <button type="submit">戻る</button>
    <button type="submit">変更を保存</button>
</form>


@endsection