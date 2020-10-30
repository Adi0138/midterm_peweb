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
Route::get('/form/{id}', 'BookingFormController@index');

Route::get('/view', 'ViewController@index');
Route::get('/view1', 'ViewController@index1');
Route::get('/view2', 'ViewController@index2');
Route::get('/view3', 'ViewController@index3');
Route::get('/view4', 'ViewController@index4');
Route::get('/Details1', 'FacilitiesController@index');
Route::get('/Details2', 'FacilitiesController@index1');
Route::get('/Details3', 'FacilitiesController@index2');
Route::get('/Details4', 'FacilitiesController@index3');
Route::get('/Details5', 'FacilitiesController@index4');
Route::get('/Details6', 'FacilitiesController@index5');
Route::get('/Details7', 'FacilitiesController@index6');
Route::get('/Details8', 'FacilitiesController@index7');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/form', 'BookingFormController@store')->name('bookingform.store');
