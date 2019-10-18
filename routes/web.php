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
    return view('savethedate');
});
Route::get('/wrong', function () {
    return view('wrongcode');
});

Route::get('/dresscode', function () {
    return view('dresscode');
});
Route::get('/location', function () {
    return view('location');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/confirm', function () {
    return view('confirm');
});
Route::get('/thankyou', function () {
    return view('thankyou');
});
Route::post('checkcode', 'CheckcodeController@check');
Route::post('confirm', 'ConfirmController@confirm');