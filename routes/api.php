<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::resource('users', 'UserController');

Route::resource('menus', 'MenuController');

Route::get('menus/{menu_id}/products', ['as' => 'menu.index', 'uses' => 'MenuController@products']);

Route::resource('products', 'ProductController');

Route::resource('carts', 'CartController');

