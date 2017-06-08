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
    return view('index');
});
Route::get('/b', function () {
    return view('welcome');
});

Route::get('/hasil', function () {
    return view('hasil');
});

Route::get('/pertanyaan1', 'SispakController@pertanyaan1view');
Route::get('/pertanyaan2', 'SispakController@pertanyaan2view');
Route::get('/pertanyaan3', 'SispakController@pertanyaan3view');
Route::get('/pertanyaan4', 'SispakController@pertanyaan4view');

Route::get('/p1','SispakController@not_found');
Route::get('/p2','SispakController@not_found');
Route::get('/p3','SispakController@not_found');
Route::get('/p4','SispakController@not_found');

Route::post('/p1','SispakController@pertanyaan1');
Route::post('/p2','SispakController@pertanyaan2');
Route::post('/p3','SispakController@pertanyaan3');
Route::post('/p4','SispakController@pertanyaan4');

Route::get('/batal', function () {
    Session::forget('jawabanP1');
    Session::forget('jawabanP2');
    Session::forget('jawabanP3');
    Session::forget('jawabanP4');
    return Redirect('/');
});