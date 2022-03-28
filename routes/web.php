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
Route::get('/welcome', function () {
    return view('welcome');});
Route::get('/home2', 'HomeController@home2');
Route::get('/', 'Controller@in');
//本軸indexグループ選択
Route::get('index', 'Controller@index')->name('index');
Route::get('explanation', 'Controller@explanation')->name('explanation');
Route::get('ito', 'Controller@ito')->name('ito');
//Route::get('/', function () {
    //return view('welcome');});
Route::get('operations', 'operationsController@index')->name('operations.index');
Route::get('operations/create', 'operationsController@create')->name('operations.create');
//Route::post('operations/create', 'operationsController@create')->name('operations.create');
//Route::get('operations/{id}', 'operationsController@show')->name('operations.show');
Route::post('operations/store', 'operationsController@store')->name('operations.store');
//edit  {id｝ってすることで、editに引数としてＩDw阿多せる感じかな
Route::get('operations/{id}', 'operationsController@edit')->name('operations.edit');
//Route::post('operations/edit', 'operationsController@edit')->name('operations.editup');
//Route::patch('operations/', 'operationsController@update')->name('operations.update');
Route::patch('operations/{id}/', 'operationsController@update')->name('operations.update');
Route::delete('operations/{id}', 'operationsController@destroy')->name('operations.destroy');




Route::get('schedules/index/{group_id}/{tn}', 'schedulesController@indexH')->name('schedules.index');
//createを先にしたmemoールーティングがindexHの時点で多いから？先にしないとルーティングが発動しない💩




Route::get('schedules/edit/{group_id}/{tn}/{id}', 'schedulesController@edit')->name('schedules.edit');
Route::patch('/update', 'schedulesController@update')->name('schedules.update');
Route::delete('/delete/{id}', 'schedulesController@destroy')->name('schedules.destroy');


Route::get('schedules/create/{group_id}/{tn}/', 'schedulesController@create')->name('schedules.create');
Route::post('schedules/create/{group_id}/{tn}', 'schedulesController@create')->name('schedules.create');
Route::post('/store', 'schedulesController@store')->name('schedules.store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
