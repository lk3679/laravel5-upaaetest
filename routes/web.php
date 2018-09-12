<?php

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

// Route::get('/', function () {
//     return view('welcome');
//     //return "<h1>Hello Laravel</h1>";
// });


Route::get('/', "PageController@index");

Route::get('/about', "PageController@about");

Route::get('/service', "PageController@service");

route::resource('/post','PostController');

route::resource('/product','ProductsController');
