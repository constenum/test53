<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

/**
 * Student resource
 */
# Index page to show all student
Route::name('student.index')->get('/student', 'StudentController@index');

# Show form to create a new Student
Route::name('student.create')->get('/student/create', 'StudentController@create');

# Process the form to create a new Student
Route::name('student.store')->post('/student', 'StudentController@store');

# Show an individual Student
Route::name('student.show')->get('/student/{title}', 'StudentController@show');

# Show form to edit a Student
Route::name('student.edit')->get('/student/{id}/edit', 'StudentController@edit');

# Process form to edit a Student
Route::name('student.update')->put('/student/{id}', 'StudentController@update');

# Get route to confirm deletion of Student
Route::name('student.destroy')->get('/student/{id}/delete', 'StudentController@delete');

# Delete route to actually destroy the Student
Route::name('student.destroy')->delete('/student/{id}', 'StudentController@destroy');

/**
 * School resource
 */
# Index page to show all school
Route::name('school.index')->get('/school', 'SchoolController@index');

# Show form to create a new School
Route::name('school.create')->get('/school/create', 'SchoolController@create');

# Process the form to create a new School
Route::name('school.store')->post('/school', 'SchoolController@store');

# Show an individual School
Route::name('school.show')->get('/school/{title}', 'SchoolController@show');

# Show form to edit a School
Route::name('school.edit')->get('/school/{id}/edit', 'SchoolController@edit');

# Process form to edit a School
Route::name('school.update')->put('/school/{id}', 'SchoolController@update');

# Get route to confirm deletion of School
Route::name('school.destroy')->get('/school/{id}/delete', 'SchoolController@delete');

# Delete route to actually destroy the School
Route::name('school.destroy')->delete('/school/{id}', 'SchoolController@destroy');
