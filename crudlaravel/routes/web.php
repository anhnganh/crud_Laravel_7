<?php

use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/admin','AdminController@index')
->middleware(['auth','role:admin']);

Route::resource('sharks','sharkController');

Route::resource('users','UserController');

Route::resource('shops','ShopController');

Route::get('/shops/{id}/users',[ShopController::class,'show'])->middleware(['auth']);

Route::get('/users/{id}/shops', [UserController::class,'show'])->middleware(['auth']);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/addShop/{$id}',[AddShopController::class,'addShops'])->name('shops.add');

Route::get('/save-shops',[UserController::class,'store'])->name('shops.save');