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

/*Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/room', function () {
    return view('room');
});

Route::get('/fac', function () {
    return view('facilities');
});*/

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/room', 'RoomController@index');
Route::get('/facilities', 'PagesController@facilities');
Route::get('/form', 'BookingFormController@index');
Route::get('/view', 'ViewController@index');
Route::get('/view1', 'ViewController@index1');
Route::get('/view2', 'ViewController@index2');
Route::get('/view3', 'ViewController@index3');
Route::get('/view4', 'ViewController@index4');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
