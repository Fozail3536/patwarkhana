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

Route::get('/','MainController@Index');
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::get('/admin','AdminController@Index');
Route::post('/admin_login','AdminController@AdminLogin');
Route::get('/Dashboard','AdminController@Dashbord');
Route::get('/admin_logout','AdminController@AdminLogout');
Route::get('/admin_profile','AdminController@AdminProfile');
Route::post('/Update_Profile/{id}','AdminController@UpdateProfile');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
