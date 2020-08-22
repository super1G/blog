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
    return view('welcome');
});
Route::get('/home','HomeController@index')->name('home');

Route::get('/about',function(){
    return view('about');
})->name('about');

Route::match(['get','post'],'/match',function(){
    return "Match method";
});

Route::any('/any/{id?}', function($id=69) {
    return $id;
});
