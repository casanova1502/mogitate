@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<p>商品一覧 > キウイ</p>
<form action="/products/{productId}/update" method="post">
    @method('PATCH')
    @csrf
    <span>商品名</span>
        <input type="text" placeholder="商品名を入力" value="{{ [''] }}">
        <input type="hidden" name="id" value="{{ [''] }}">
    @error('name')
    {{ $message}}
    @enderror
    <span>値段</span>
        <input type="number" placeholder="値段を入力" value="{{''}}">
        <input type="hidden" name="id" value="{{ [''] }}">
    @error('price')
    {{ $message}}
    @enderror
    <span>商品画像</span>
        <input type="file" name="imgpath">
        <input type="hidden" name="id" value="{{ [''] }}">
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
    <span>商品紹介</span>
        <textarea name="content" placeholder="商品の説明を入力"></textarea>
        <input type="hidden" name="id" value="{{ [''] }}">
    @error('decription')
    {{ $message}}
    @enderror
</form>
@endsection