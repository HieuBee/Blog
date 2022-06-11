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

 /* Route::get('xinchao/{ten}/{namsinh}', 'testController@getxinchao');
Route::get('tambiet/{ten}/{namsinh}', 'testController@gettambiet'); 
Route::get('xinchao/{ten}/{namsinh}', 'testController@getindex'); 
Route::get('/user', 'testController@getvonglap');*/

Route::get('call-view', function() {
    return view('home');
});
Route::get('/home', 'testController@getmaster');

/*
Route::get('/', function() {
    return view('welcome');
});
Route::get('chao/{user}', function($user) {
    return view('hello-user', ['user' => $user]);
});
*/

/*Route::get('schema/create-table', function()
{
    Schema::create('user', function($table){
        $table->increments('id');
    });
});*/
Route::get('/table', 'testController@CreateTable');
Route::get('/taobang','testController@taobang');
Route::get('/taobang1', 'testController@CreateTable1');
Route::get('/taobang2', 'testController@CreateTable2s');

Route::get('/post', 'testController@Posts');

Route::get('/tablenew', 'testController@Table');

/*
Route::get('/list-posts'. function() {
    $data=DB::table('posts')->get();
    print_r($data);
});

Route::get('/column'. function() {
    DB::table('posts')->select('content','title')->get();
});
*/
Route::get('/list-posts', function() {
    DB::table('posts')->select('title', 'content')->get();
});

Route::get('/models', function() {
    $data=DB::table('posts')->get();
    return view('index', compact('data'));
});

Route::get('/homepage', function() {
    $data=DB::table('posts')->get();
    return view('homepage', compact('data'));
});

Route::get('/custom', 'testController@custom');
Route::get('/store', 'testController@store');
Route::get('/motorsport', 'testController@motorsport');
/* Route::get('/homepage', 'testController@homepage');
 */
Route::get('/huracan', 'testController@huracan');


