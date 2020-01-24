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

Route::get('/home', 'helloworld@show1');

Route::get('/aboutus', 'helloworld@show');

Route::get('/contactus', 'helloworld@show2');


Route::get('/oldpage', function () {
    return view('welcome');
});

