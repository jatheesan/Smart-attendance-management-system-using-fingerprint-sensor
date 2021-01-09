<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;

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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@adminHome')->name('admindashboard')->middleware('role');

Route::get('/change-password', 'User\ChangePasswordController@index');
Route::post('/change-password', 'User\ChangePasswordController@store')->name('change.password');

Route::group(['middleware' => ['auth', 'role']], function() {

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

  Route::get('/level3', function () {
    return view('level_3.level3');
  });

  Route::get('/admin/home',[DashboardController::class,'displycourse'])->name('admindashboard')->middleware('role');

  Route::any('/tables/users', 'Auth\UserController@index');
  Route::get('/user/edit/{id}', 'Auth\UserController@edit')->name('edit');
  Route::patch('/user/update/{id}', 'Auth\UserController@update')->name('update');
  Route::delete('/user/delete/{id}', 'Auth\UserController@destroy')->name('delete');

  Route::any('/tables/lecturers',[LecturerController::class,'index'])->name('lecturer_view');
  Route::post('/lecturer/store',[LecturerController::class,'store']);
  Route::get('/lecturer/edit/{id}', [LecturerController::class, 'edit']) ->name('lecturer_edit');
  Route::patch('/lecturer/update/{id}', [LecturerController::class, 'update']) ->name('lecturer_update');
  Route::delete('/lecturer/delete/{id}', [LecturerController::class, 'destroy']) ->name('lecturer_delete');

  Route::group(['middleware' => 'islecturers'], function () {
  Route::get('/course', 'Course_LecturerController@lecturer_show')->name('lecturer_show');
  });

  Route::any('/tables/courses',[CourseController::class,'index']);
  Route::post('/course/store',[CourseController::class,'store']);
  Route::get('/course/edit/{id}', [CourseController::class, 'edit']) ->name('course_edit');
  Route::patch('/course/update/{id}', [CourseController::class, 'update']) ->name('course_update');
  Route::delete('/course/delete/{id}', [CourseController::class, 'destroy']) ->name('course_delete');

  Route::any('/tables/students',[StudentController::class,'index']);
  Route::post('/student/store',[StudentController::class,'store']);
  Route::get('/student/edit/{id}', [StudentController::class, 'edit']) ->name('student_edit');
  Route::patch('/student/update/{id}', [StudentController::class, 'update']) ->name('student_update');
  Route::delete('/student/delete/{id}', [StudentController::class, 'destroy']) ->name('student_delete');

  Route::get('/level3s', 'S3courseController@index');
  Route::post('/attendance', 'S3courseController@attendance');

  Route::get('/level3g', 'G3courseController@index');
  Route::post('/attendance3g', 'G3courseController@attendance');

  Route::get('/level3m', 'M3courseController@index');
  Route::post('/attendance3m', 'M3courseController@attendance');

  // Route::get('/level3s', function () {
  //   return view('level_3.3scourse.3scourses');
  // });
});




Route::group([
    'prefix' => 'attendance_3_s__students',
], function () {
    Route::get('/', 'Attendance3SStudentsController@index')
         ->name('attendance_3_s__students.attendance_3_s__student.index');
    Route::get('/create','Attendance3SStudentsController@create')
         ->name('attendance_3_s__students.attendance_3_s__student.create');
    Route::get('/show/{attendance3SStudent}','Attendance3SStudentsController@show')
         ->name('attendance_3_s__students.attendance_3_s__student.show')->where('id', '[0-9]+');
    Route::get('/{attendance3SStudent}/edit','Attendance3SStudentsController@edit')
         ->name('attendance_3_s__students.attendance_3_s__student.edit')->where('id', '[0-9]+');
    Route::post('/', 'Attendance3SStudentsController@store')
         ->name('attendance_3_s__students.attendance_3_s__student.store');
    Route::put('attendance_3_s__student/{attendance3SStudent}', 'Attendance3SStudentsController@update')
         ->name('attendance_3_s__students.attendance_3_s__student.update')->where('id', '[0-9]+');
    Route::delete('/attendance_3_s__student/{attendance3SStudent}','Attendance3SStudentsController@destroy')
         ->name('attendance_3_s__students.attendance_3_s__student.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'attendance_3_g__students',
], function () {
    Route::get('/', 'Attendance3GStudentsController@index')
         ->name('attendance_3_g__students.attendance_3_g__student.index');
    Route::get('/create','Attendance3GStudentsController@create')
         ->name('attendance_3_g__students.attendance_3_g__student.create');
    Route::get('/show/{attendance3GStudent}','Attendance3GStudentsController@show')
         ->name('attendance_3_g__students.attendance_3_g__student.show')->where('id', '[0-9]+');
    Route::get('/{attendance3GStudent}/edit','Attendance3GStudentsController@edit')
         ->name('attendance_3_g__students.attendance_3_g__student.edit')->where('id', '[0-9]+');
    Route::post('/', 'Attendance3GStudentsController@store')
         ->name('attendance_3_g__students.attendance_3_g__student.store');
    Route::put('attendance_3_g__student/{attendance3GStudent}', 'Attendance3GStudentsController@update')
         ->name('attendance_3_g__students.attendance_3_g__student.update')->where('id', '[0-9]+');
    Route::delete('/attendance_3_g__student/{attendance3GStudent}','Attendance3GStudentsController@destroy')
         ->name('attendance_3_g__students.attendance_3_g__student.destroy')->where('id', '[0-9]+');
});





Route::group([
    'prefix' => 'attendance_3_m__students',
], function () {
    Route::get('/', 'Attendance3MStudentsController@index')
         ->name('attendance_3_m__students.attendance_3_m__student.index');
    Route::get('/create','Attendance3MStudentsController@create')
         ->name('attendance_3_m__students.attendance_3_m__student.create');
    Route::get('/show/{attendance3MStudent}','Attendance3MStudentsController@show')
         ->name('attendance_3_m__students.attendance_3_m__student.show')->where('id', '[0-9]+');
    Route::get('/{attendance3MStudent}/edit','Attendance3MStudentsController@edit')
         ->name('attendance_3_m__students.attendance_3_m__student.edit')->where('id', '[0-9]+');
    Route::post('/', 'Attendance3MStudentsController@store')
         ->name('attendance_3_m__students.attendance_3_m__student.store');
    Route::put('attendance_3_m__student/{attendance3MStudent}', 'Attendance3MStudentsController@update')
         ->name('attendance_3_m__students.attendance_3_m__student.update')->where('id', '[0-9]+');
    Route::delete('/attendance_3_m__student/{attendance3MStudent}','Attendance3MStudentsController@destroy')
         ->name('attendance_3_m__students.attendance_3_m__student.destroy')->where('id', '[0-9]+');
});
