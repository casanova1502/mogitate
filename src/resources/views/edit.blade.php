@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<p>商品一覧 > {{ $product['id']}}</p>
<form action="/products/{productId}/update" method="post">
    @method('PATCH')
    @csrf
    <input type="file" name="imgpath">
    <input type="hidden" name="id" value="{{ $product['id'] }}">
    <span>商品名</span>
        <input type="text" value="{{ $product['name'] }}">
        <input type="hidden" name="id" value="{{ $product['id'] }}">
    @error('name')
    {{ $message}}
    @enderror
    <span>値段</span>
        <input type="number" value="{{ $product['price']}}">
        <input type="hidden" name="id" value="{{ $product['id'] }}">
    @error('price')
    {{ $message}}
    @enderror
    <span>季節</span>
        <input type="radio" id="seasonChoice1" name="season" value="spring">
        <label for="seasonChoice1">春</label>
        <input type="hidden" name="id" value="{{ [''] }}">
        <input type="radio" id="seasonChoice2" name="season" value="summer">
        <label for="seasonChoice2">夏</label>
        <input type="hidden" name="id" value="{{ [''] }}">
        <input type="radio" id="seasonChoice3" name="season" value="autumn">
        <label for="seasonChoice3">秋</label>
        <input type="hidden" name="id" value="{{ [''] }}">
        <input type="radio" id="seasonChoice4" name="season" value="winter">
        <label for="seasonChoice3">冬</label>
        <input type="hidden" name="id" value="{{ [''] }}">
    @error('name')
    {{ $message}}
    @enderror
    <span>商品説明</span>
        <textarea name="content" placeholder="商品の説明を入力"></textarea>
        <input type="hidden" name="id" value="{{ $product['id'] }}">
    @error('decription')
    {{ $message}}
    @enderror
    <button type="button" onclick="window.history.back();">戻る</button>
    <button type="submit">変更を保存</button>
</form>
<form action="/products/{productId}/delete" method="post">
    @method('DELETE')
    @csrf
    <input type="hidden" name="id" value="{{ $product['id']}}">
    <button type="submit">削除</button>
</form>
@endsection