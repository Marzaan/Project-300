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

//========== Home ==========//
Route::get('/',
	['as'=> 'index', 'uses'=> 'ProductController@index2']);
Route::get('/index',
	['as'=> 'index', 'uses'=> 'ProductController@index2']);

//========== About ==========//
Route::get('/about', function () {
    return view('about');
});

//========== Products ==========//
Route::get('/product','ProductController@index')->name('product');
Route::post('/product','ProductController@store')->name('product');
Route::get('/search', 'ProductController@search')->name('search');
Route::get('/sort', 'ProductController@sort')->name('sort');
Route::get('/fruit', 'ProductController@fruits')->name('fruit');
Route::get('/veg', 'ProductController@vegetables')->name('veg');

//========== Registration ==========//
Route::get('/registration',[
	'uses' => 'RegistersController@index'
]);
Route::post('/registration',[
	'uses' => 'RegistersController@store'
]);

//========== PostProduct ==========//
Route::get('/addproduct', function () {
    return view('addproduct');
});

//========== Contact ==========//
Route::get('/contact', function () {
    return view('contact');
});

//========== Admin/Home ==========//
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/searchReg', 'HomeController@search')->name('search');
Route::get('/edit/{editId}','HomeController@edit')->name('edit');
Route::post('/update','HomeController@update')->name('update');
Route::get('/delete/{userId}','HomeController@delete')->name('delete');

//========== Admin/Products ==========//
Route::get('/products','ProductsController@index')->name('products');
Route::get('/searchProduct', 'ProductsController@search')->name('searchProduct');
Route::get('/deleteProduct/{userId}','ProductsController@delete')->name('deleteProduct');

//========== Admin/Messages ==========//
Route::get('/messages', 'MessagesController@index')->name('messages');
Route::post('/messages', 'MessagesController@store')->name('messages');
Route::get('/searchMessage', 'MessagesController@search')->name('searchMessage');
Route::get('/deleteMessage/{userId}','MessagesController@delete')->name('deleteMessage');

//========== Auth ==========//
Auth::routes();


