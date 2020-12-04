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

Route::get('/student', function () {
  return view('students.studentregister');
});

Route::get('/course', function () {
  return view('courses.courseregister');
});

Route::get('/lecturer', function () {
  return view('lecturers.lecturerregister');
});

Route::get('/admin', function () {
  return view('admins.adminregister');
});

Route::get('/dashboard', function () {
  return view('dashboard');
});

Route::get('admin/home', 'HomeController@adminHome')->name('admindashboard')->middleware('role');

Route::get('/tables/users', 'Auth\UserController@index');
Route::get('/tables/users/edit/{id}', 'Auth\UserController@edit')->name('edit');
Route::patch('/tables/users/update/{id}', 'Auth\UserController@update')->name('update');
Route::delete('/tables/users/delete/{id}', 'Auth\UserController@destroy')->name('delete');


Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
