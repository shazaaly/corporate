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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('home', function () {
    return view('layouts.home');
});

Route::get('home','HomeController@index' )->name('home');

//===============TEST Routs========================//
Route::get('get','HomeController@getPostTitle' );
Route::get('post','HomeController@SecPosts' );

//===============TEST Routs========================//


Route::get('blog-post/{id}','HomeController@blogPost' )->name('blog-post');

Route::get('about-us', 'PageController@index')->name('about-us');
Route::get('services', 'ServicesController@index')->name('services');







