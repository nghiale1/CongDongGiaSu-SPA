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


Route::view('/a', 'admin.pages.index');
Route::group(['prefix' => ''], function () {
    Route::view('/', 'client.pages.index');
    Route::view('/tim-lop', 'client.pages.post');
    Route::view('/tim-gia-su', 'client.pages.find_tutor');
    Route::view('/dang-ky-gia-su', 'client.pages.register_tutor');
    
});
Route::group(['prefix' => 'gia-su'], function () {
    
});
Route::group(['prefix' => 'phu-huynh'], function () {
    
});
Route::group(['prefix' => 'ban-tin'], function () {
    
});
Route::group(['prefix' => 'hoc-sinh'], function () {
    
});
Route::group(['prefix' => 'lop-hoc'], function () {
    
});
Route::group(['prefix' => 'thong-ke'], function () {
    
});
