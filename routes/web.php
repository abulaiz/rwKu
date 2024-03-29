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

include 'app/admin/admin.php';
include 'app/admin/resident.php';
include 'app/main.php';

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/log', 'TestController@log');
Route::get('/pdf/{id}', 'TestController@index');
Route::post('/service/submit','SubmissionController@store')->name('submit_submission');
Route::post('/resident/submit','SementaraController@euy')->name('manip');
