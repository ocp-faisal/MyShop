<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

// routes/api.php
use App\Http\Controllers\ShopController;
// use App\Http\Controllers\FaqController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
})->middleware(['verify.shopify'])->name('home');



Route::get('/shop',[ShopController::class, 'getDetails']
)->middleware(['verify.shopify'])->name('shop');


Route::get('/products',[ShopController::class, 'index']
)->middleware(['verify.shopify'])->name('product.index');


Route::get('/group',[FaqController::class, 'groupIndex']
)->middleware(['verify.shopify'])->name('group.index');

Route::post('/groups-index', [\App\Http\Controllers\FaqController::class, 'groupIndex'])
    ->middleware(['verify.shopify'])
    ->name('group.save');
