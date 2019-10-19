<?php
use Illuminate\Http\Request;
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
Route::get('/confirm', function (Request $req) {
    $value = $req->cookie('confirm');
    $confirm = 'KO';
  if($value){
    $confirm = 'OK';
  }
  return view('confirm', ['confirm'=>$confirm]);
});
Route::get('/thankyou', function () {
    $cookie = \Cookie::queue('confirm', 'ok', 54000);
    return view('thankyou');
});
Route::post('checkcode', 'CheckcodeController@check');
Route::post('confirm', 'ConfirmController@confirm');