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

Route::get('xinchao/{ten}/{namsinh}', 'testController@getxinchao');
Route::get('tambiet/{ten}/{namsinh}', 'testController@gettambiet');
