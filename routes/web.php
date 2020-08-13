<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/location','LocationController@index');
Route::post('/location/create','LocationController@create');
Route::get('/location/{id}/edit','LocationController@edit');
Route::post('/location/{id}/update','LocationController@update');
