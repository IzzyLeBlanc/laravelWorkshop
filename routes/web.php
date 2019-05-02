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
    return view('about-me');
});

Route::get('/about-me', 'PageController@aboutMe')->name('about-me');

Route::get('/my-hobby', 'PageController@myHobby')->name('my-hobby');

Route::get('/contact-me', 'PageController@contactMe')->name('contact-me');