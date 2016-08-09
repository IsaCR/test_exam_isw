<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/professor', 'ProfessorController@index');
Route::get('/course', 'CourseController@index');
Route::get('/group', 'GroupController@index');

Route::get('/professor/create', 'ProfessorController@create');
Route::get('/course/create', 'CourseController@create');
Route::get('/group/create', 'GroupController@create');

Route::post('/professor/store', 'ProfessorController@store');
Route::post('/course/store', 'CourseController@store');
Route::post('/group/store', 'GroupController@store');


