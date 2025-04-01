@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<h1 class="title">商品登録</h1>
<form action="/products" enctype="multipart/form-data" method="post">
    @csrf
    <div class="register__contents">
        <div class="register__contents__item">
            <span>商品名</span>
            <span class="required">必須</span>   
        </div>
        <input type="text" placeholder="商品名を入力" value="{{ old('name')}}" >
        @error('name')
        <p class="error__message">{{ $message }}</p>
        @enderror
    </div>
    <div class="register__contents">
        <div class="register__contents__item">
            <span>値段</span>
            <span class="required">必須</span>
        </div>
        <input type="number" placeholder="値段を入力" value="{{ old('price')}}" >
        @error('price')
        <p class="error__message">{{ $message }}</p>
        @enderror
    </div>
    <div class="register__contents">
        <div class="register__contents__item">
            <span>商品画像</span>
            <span class="required">必須</span>
        </div>
        <input type="file" name="imgpath" value="{{ old('image')}}" >
        @error('image')
        <p class="error__message">{{ $message }}</p>
        @enderror
    </div>
    <div class="register__contents">
        <div class="register__contents__item">
            <span>季節</span>
            <span class="required">必須</span>
            <span class="required__Multiple">複数回答可</span>
        </div>
        <input type="radio" id="seasonChoice1" name="season" value="spring">
        <label for="seasonChoice1">春</label>
        <input type="radio" id="seasonChoice2" name="season" value="summer">
        <label for="seasonChoice2">夏</label>
        <input type="radio" id="seasonChoice3" name="season" value="autumn">
        <label for="seasonChoice3">秋</label>
        <input type="radio" id="seasonChoice4" name="season" value="winter">
        <label for="seasonChoice3">冬</label>
        @error('name')
        <p class="error__message">{{ $message }}</p>
        @enderror
    </div>
    <div class="register__contents">
        <div class="register__contents__item">
            <span>商品紹介</span>
            <span class="required">必須</span>
        </div>
        <textarea name="content" placeholder="商品の説明を入力" value="{{ old('content') }}"></textarea>
        @error('description')
        <p class="error__message">{{ $message }}</p>
        @enderror
    </div>
    <div class="register__button">
        <button class="register__button__back" type="button" onclick="window.history.back();">戻る</button>
        <button class="register__button__store" type="submit">変更を保存</button>
    </div>
</form>
@endsection