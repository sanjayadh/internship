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

Route::get('/sanjay', function () {
    return view('welcome');
});
Route::get('/',function(){
    return view('social');
});
Route::get('/ss',function(){
    return view('fluff');
});
Route::get('/sangita',function (){
    return view('sangita');
});
/*
Route::resource("social",'ProjectController@index');
Route::get('login',function (){
    return view('login');
});*/
Route::get("login","LockdownController@getLogin")->name('login');
