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

Route::get('/','HomeController@index');
Route::post('/login','HomeController@loginPost');
Route::get('/dashboard','HomeController@dashboard');
Route::get('/client','HomeController@client');
Route::get('/client-add','HomeController@clientDetail');
Route::post('/client-add/{id}','HomeController@clientAddPost');
Route::post('/client-add','HomeController@clientAddPost');
Route::get('/client-detail/{id}','HomeController@clientDetail');
Route::get('/admin-profile','HomeController@adminProfile');
Route::post('/admin-profile','HomeController@adminProfilePost');
Route::get('/search-result','HomeController@searchResult');
Route::get('/change-password','HomeController@changePassword');
Route::post('/change-password','HomeController@changePasswordPost');

Route::get('/updateimage','HomeController@updateimage');
Route::post('/updateimage','HomeController@updateimagePost');


Route::get('/web-open','HomeController@webOpen');
