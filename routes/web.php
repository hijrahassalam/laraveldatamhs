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

/* Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    $nama = 'Hijrah Developers';
    return view('about', ['nama' => $nama]);
});
 */
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/mahasiswa', 'MahasiswaController@index');

/* //Students
//All students
Route::get('/students', 'StudentsController@index');
//store student
Route::post('/students', 'StudentsController@store');
//create student
Route::get('/students/create', 'StudentsController@create');
//show 1 student
Route::get('/students/{student}', 'StudentsController@show');
//delete student
Route::delete('/students/{student}', 'StudentsController@destroy');
//show edit form
Route::get('/students/{student}/edit', 'StudentsController@edit');
//patch/update student
Route::patch('/student/{student}', 'StudentsController@update'); */
Route::resource('students','StudentsController');

