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
Route::get('breed','ExamController@listBreed');
Route::get('listdog','ExamController@listDog');
Route::get('scopes','ExamController@scopes');
Route::get('update', 'ExamController@update');
Route::get('create', 'ExamController@create');
Route::get('delete', 'ExamController@delete');
Route::get('soft', function(){
	Schema::table('breed', function ($table) {
    $table->softDeletes();
	});
});