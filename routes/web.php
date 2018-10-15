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

//welcome page
Route::get('/', 'welcomeController@index');


//for displaying data
Route::get('/semester-category', 'displaydataController@index'); //main page where search form is available
Route::post('/semester-category/students-list', 'displaydataController@students'); //for passing semester number via 'post' method and displaying list of students in that semester
Route::get('/semester-category/students-list/{id}', 'displaydataController@studentdata');//display single student data


//for creating database entries
Route::get('/add-new-student', 'createdataController@form'); //form page
Route::post('/add-new-student', 'createdataController@store'); //store data to db


//for updating database entries
Route::get('/semester-category/students-list/{id}/update', 'updatedataController@updateform');//route to update view form
Route::put('/semester-category/students-list/{id}/update', 'updatedataController@updatedata');//storing updated data to db


//for delete entry
Route::delete('/semester-category/students-list/{id}/delete', 'deletedataController@delete'); //delete selected id row