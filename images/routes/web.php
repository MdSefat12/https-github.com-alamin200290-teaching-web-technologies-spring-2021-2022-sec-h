<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/product/list',[ProductController::class,"list"])->name("product.list");
Route::get('/addtocart/{id}',[ProductController::class,"addtocart"])->name("product.addtocart");
Route::get('/emtycart',[ProductController::class,"emtycart"])->name("product.emtycart");

Route::get('/cart',[ProductController::class,"cart"])->name("product.mycart");
