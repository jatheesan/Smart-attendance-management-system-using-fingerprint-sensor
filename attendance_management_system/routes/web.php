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
//return view('Registerforms/lecturerregister');
//return view('Registerforms/studentregister');
//return view('Registerforms/adminregister');
//sreturn view('Registerforms/login');
return view('Registerforms/courseregister');
  //  return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
