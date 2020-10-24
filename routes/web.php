<?php

use Illuminate\Support\Facades\Route;

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
// Mycontroller
Route::get('/','MyController@home')->name('homepage');
Route::get('/local','MyController@local')->name('localpage');
Route::get('/internetional','MyController@internetional')->name('internetionalpage');
Route::get('/sports','MyController@sports')->name('sportspage');
Route::get('/entertainment','MyController@entertainment')->name('entertainmentpage');
Route::get('/knowledge','MyController@knowledge')->name('knowledgepage');
Route::get('/detail','MyController@detail')->name('detailpage');

Route::get('/service','MyController@service')->name('servicepage');

//studentController
Route::resource('student','StudentController');


