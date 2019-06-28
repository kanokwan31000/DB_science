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


Route::get('', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('layouts.pop');
});
Route::get('/1111', function () {
    return view('activities/activities');
});
Route::get('/2222', function () {
    return view('Check list/Check list');
});
Route::get('/3333', function () {
    return view('Contact Us/Contact Us');
});
Route::get('/4444', function () {
    return view('objective/objective');
});
Route::get('/5555', function () {
    return view('Result/Result');
});
Route::get('/BRU','Jane2Controller@create');

Route::get('/toJane','Jane2Controller@create');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
