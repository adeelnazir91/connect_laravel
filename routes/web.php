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

Route::get('/', 'pagesController@index' );

Route::get('/aboutus', 'pagesController@aboutus');

Route::get('/partner', 'pagesController@partner');

Route::get('/users/{id}', 'pagesController@users');

 