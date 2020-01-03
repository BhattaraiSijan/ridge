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
Route::get('/','HomeController@home');
Route::get('/home','HomeController@home')->name('home');
Route::get('/about','HomeController@about')->name('about');
Route::get('/service','HomeController@service')->name('service');
Route::get('/project','HomeController@project')->name('project');
Route::get('/contact','HomeController@contact')->name('contact');

