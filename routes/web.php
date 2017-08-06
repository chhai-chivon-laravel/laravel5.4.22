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

Route::get('/', function () {
    return view('welcome');
});

//Route::get("/users", function (){
//	return [
//		[
//			"username" => "admin",
//			"password" => "123"
//		]
//	];
//});

/*Route::get("/products", "ProductController@index");

Route::get("/products/create", "ProductController@create");

Route::post("/products/store", "ProductController@store");

Route::get("/products/show/{id}", "ProductController@show");

Route::get("/products/edit/{id}", "ProductController@edit");

Route::put("/products/update/{id}", "ProductController@update");

Route::delete("/products/destroy/{id}", "ProductController@destroy");
*/

Route::resource("products","ProductController");