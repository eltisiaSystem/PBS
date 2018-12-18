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

Route::get('/inkubator', 'InkubatorController@index');

Route::get('/superadmin', 'SuperadminController@index');
Route::get('/superadmin/addincubator', 'SuperadminController@addIncubator');
Route::get('/superadmin/dashboard', 'SuperadminController@dashboard');

Route::get('/db','InkubatorController@addDb');
