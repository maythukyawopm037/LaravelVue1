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


Route::get('/', function(){ 
	return view("welcome"); 
});
Route::resource('items', 'ItemController');

//Route::get('/','ItemController@welcome');
// Route::get('items/','ItemController@index');
// Route::get('items/create','ItemController@create');
// Route::post('/items','ItemController@store');
// Route::get('/edit/{id}','ItemController@edit');

// Route::get('/', function () {
//     return view('welcome');
// });
