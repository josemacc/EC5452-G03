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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('categories', 'CategoryController');

Route::resource('comments', 'CommentController');
//Courses
Route::resource('courses', 'CourseController');

Route::post('courses', 'CourseController@disapprove')->name('courses.disapprove');

Route::post('courses', 'CourseController@approve')->name('courses.approve');
// Publish/Unpublish
Route::post('courses', 'CourseController@publishCourse')->name('courses.publishCourse');

Route::post('courses', 'CourseController@unpublishCourse')->name('courses.unpublishCourse');


Route::resource('courseUsers', 'CourseUserController');

Route::resource('items', 'ItemController');

Route::resource('payments', 'PaymentController');

Route::resource('users', 'UserController');

Route::resource('views', 'ViewController');

Route::resource('roles', 'RoleController');


Route::resource('courses', 'CourseController');