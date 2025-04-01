@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="mogitate__title">
    <a class="mogitate__title__main">{{ $product->name }}の商品一覧</a>
</div>
<div class="search__sort__product">
    <form action="/products/search" method="post">
    @csrf
        <div class=search__sort>
            <input class="search__box" type="search" id="product-search" name="search" placeholder="商品名で検索">
            <button class="search__buttont" type="submit">検索</button>
            <a class="price__text">価格順で表示</a>
            <select class="sort__option" name=price>
                <option value="high__price">高い順に表示</option>
                <option value="low__price">低い順に表示</option>
            </select>
        </div>
    </form>
    @if (@isset($product))
    <table class="mogitate__product__table">
        <tr>
            <td>
                <form action="/products/{productId}/update" method="post">
                    @csrf
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ basename($product->image) }}">
                    <div class="mogitate__products__table__item">
                        <p>{{ $product->name }}</p>
                        <p>{{ $product->price }}</p>
                    </div>
                </form>
            </td>
        </tr>
    </table>
</div>
@endif
@endsection