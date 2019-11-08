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
    return redirect()->route('login');
});

// Auth::routes();

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Route::get('/logout', 'UserController@logout')->name('logout');
Route::middleware('auth')->group(function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/employee', 'EmployeeController@index')->name('employee');
    Route::get('/employee/create', 'EmployeeController@create')->name('create-employee');
    Route::get('/employee/view', 'EmployeeController@show')->name('view-employee');
    Route::get('/employee/edit', 'EmployeeController@edit')->name('edit-employee');
    Route::get('/grade', 'GradeController@index')->name('grade');
    Route::get('/grade/create', 'GradeController@create')->name('create-grade');
    Route::get('/grade/view', 'GradeController@show')->name('view-grade');
    Route::get('/grade/edit', 'GradeController@edit')->name('edit-grade');
    Route::get('/position', 'PositionController@index')->name('position');
    Route::get('/position/create', 'PositionController@create')->name('create-position');
    Route::get('/position/view', 'PositionController@show')->name('view-position');
    Route::get('/position/edit', 'PositionController@edit')->name('edit-position');
    Route::get('/question', 'QuestionController@index')->name('question');
    Route::get('/question/create', 'QuestionController@create')->name('create-question');
    Route::get('/question/view', 'QuestionController@show')->name('view-question');
    Route::get('/question/edit', 'QuestionController@edit')->name('edit-question');
});
