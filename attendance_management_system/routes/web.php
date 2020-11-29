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

Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('admindashboard');
