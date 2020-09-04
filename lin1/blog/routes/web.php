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
    return view('index');
});
Route::get('/home','HomeController@index')->name('home');

Route::get('/about',function(){
    return view('about');
})->name('about');

Route::get('/sign_in',function(){
    return view('sign_in');
})->name('sign_in');

Route::match(['get','post'],'/match',function(){
    return "Match method";
});

Route::any('/any/{id?}', function($id=69) {
    return $id;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
