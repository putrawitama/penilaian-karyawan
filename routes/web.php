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
    Route::post('/employee/store', 'EmployeeController@store')->name('store-employee');
    Route::get('/employee/view/{id}', 'EmployeeController@show')->name('view-employee');
    Route::get('/employee/edit/{id}', 'EmployeeController@edit')->name('edit-employee');
    Route::post('/employee/update/{id}', 'EmployeeController@update')->name('update-employee');
    Route::get('/employee/delete/{id}', 'EmployeeController@delete')->name('delete-employee');

    Route::get('/grade', 'GradeController@index')->name('grade');
    Route::get('/grade/create', 'GradeController@create')->name('create-grade');
    Route::post('/grade/store', 'GradeController@store')->name('store-grade');
    Route::get('/grade/view/{id}', 'GradeController@show')->name('view-grade');
    Route::get('/grade/edit/{id}', 'GradeController@edit')->name('edit-grade');
    Route::post('/grade/update/{id}', 'GradeController@update')->name('update-grade');
    Route::get('/grade/delete/{id}', 'GradeController@delete')->name('delete-grade');

    Route::get('/category', 'PositionController@index')->name('category');
    Route::get('/category/create', 'PositionController@create')->name('create-category');
    Route::get('/category/delete/{id}', 'PositionController@delete')->name('delete-category');

    Route::get('/question', 'QuestionController@index')->name('question');
    Route::get('/question/create', 'QuestionController@create')->name('create-question');
    Route::get('/question/view', 'QuestionController@show')->name('view-question');
    Route::get('/question/edit', 'QuestionController@edit')->name('edit-question');

    Route::get('/assessment', 'AssessmentController@index')->name('assessment');
    Route::get('/assessment/create', 'AssessmentController@create')->name('create-assessment');
});

