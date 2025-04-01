<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/register', [ProductController::class, 'create']);
Route::post('/products', [ProductController::class, 'store']);
Route::post('/products/search', [ProductController::class, 'search']);
Route::get('/products/{productId}', [ProductController::class, '']);
Route::get('/products/{productsId}/update',[ProductController::class, 'edit'])->name('products.edit');
Route::patch('/products/{productId}/update', [ProductController::class, 'update']);
Route::delete('/products/{productId}/delete', [ProductController::class, 'destroy']);
Route::get('/search', [ProductController::class, 'find']);
Route::post('/search', [ProductController::class, 'search']);