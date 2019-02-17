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
    return view('home');
});
//input fields
Route::resource('input', 'InputController');
Route::post('/upload_photo', 'InputController@uploadImage')->name('upload');

Route::post('test','InputController@test');
Route::get('testing','InputController@testPost');

Route::get('nutrition', 'InputController@getNutrition');

Route::get('/food_lists', function () {
	return view('FoodList');
})->name('foodLists');

Route::get('/food_details/{food_id}', function () {
	return view('FoodDetails');
})->name('foodDetails');
