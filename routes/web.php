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

Auth::routes();
Route::get('/','BarangController@Index')->name('home');
Route::post('/store','BarangController@Store');
Route::get('/show/{id}','BarangController@Show');
Route::post('edit','BarangController@Edit')->name('edit');
Route::post('destroy','BarangController@Destroy');
Route::get('q/','BarangController@Search')->name('search');	
