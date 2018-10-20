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
Route::get('/students-list', 'displaydataController@index'); //main page where search form is available
Route::get('/students-list/{id}', 'displaydataController@studentdata');//display single student data


//for creating database entries
Route::get('/add-new-student', 'createdataController@form'); //form page
Route::post('/add-new-student', 'createdataController@store'); //store data to db


//for updating database entries
Route::get('/students-list/{id}/update', 'updatedataController@updateform');//route to update view form
Route::put('/students-list/{id}/update', 'updatedataController@updatedata');//storing updated data to db


//for delete entry
Route::delete('/students-list/{id}/delete', 'deletedataController@delete'); //delete selected id row