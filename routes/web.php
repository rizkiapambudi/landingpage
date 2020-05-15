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

Route::get('/', function () {
    return view('niaga/welcome');
});

Route::get('/adminlte', function () {
    return view('admin/adminlte');
});

Route::resource('item', 'Item\ItemController');
Route::get('items/list', 'Item\ItemController@list');

Route::get('/500', function () {
	return response()->json([
		'message' => 'error 500'
	]);
});

