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

Route::get('/tasks', "TaskController@listAll");
Route::get('/tasks/new', "TaskController@showCreateForm");
Route::post('/tasks/new', "TaskController@create");
Route::get('/tasks/{id}/edit', "TaskController@showEditForm");
Route::post('/tasks/{id}/edit', "TaskController@edit");