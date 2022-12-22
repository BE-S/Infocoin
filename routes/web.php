<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', '\App\Http\Controllers\Client\HomeController@index')->name('get.home');

Route::get('/category/{name}', '\App\Http\Controllers\Client\CategoryController@index')->name('get.category.name');
Route::post('/category/coin/get', '\App\Http\Controllers\Client\CategoryController@pages')->name('post.category.pages');

Route::get('/description/coin/{name}', '\App\Http\Controllers\Client\DescriptionController@index')->name('get.description.coin.name');
