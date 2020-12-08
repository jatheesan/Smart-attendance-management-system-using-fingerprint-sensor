<?php

use App\Http\Controllers\LecturerController;
//use App\Http\Middleware\IsLecturers;
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
Route::get('/user/edit/{id}', 'Auth\UserController@edit')->name('edit');
Route::patch('/user/update/{id}', 'Auth\UserController@update')->name('update');
Route::delete('/user/delete/{id}', 'Auth\UserController@destroy')->name('delete');

Route::get('change-password', 'User\ChangePasswordController@index');
Route::post('change-password', 'User\ChangePasswordController@store')->name('change.password');

Route::get('/tables/lecturers',[LecturerController::class,'index']);
Route::post('/lecturer/store',[LecturerController::class,'store']);
Route::get('/lecturer/edit/{id}', [LecturerController::class, 'edit']) ->name('lecturer_edit');
Route::patch('/lecturer/update/{id}', [LecturerController::class, 'update']) ->name('lecturer_update');
Route::delete('/lecturer/delete/{id}', [LecturerController::class, 'destroy']) ->name('lecturer_delete');

Route::group(['middleware' => 'islecturers'], function () {
  Route::get('/course', 'Course_LecturerController@lecturer_show')->name('lecturer_show');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
