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

Route::get('/', 'FrontEndController@homePage')->name('home');
//input fields
Route::resource('input', 'InputController');
Route::post('/upload_photo', 'InputController@uploadImage')->name('upload');

Route::post('test','InputController@test');
Route::get('testing','InputController@testPost');

Route::get('/food_lists', 'FrontEndController@foodListPage')->name('foodLists');

Route::get('/food_details/{food_name}', 'InputController@getNutrition')->name('foodDetails');
