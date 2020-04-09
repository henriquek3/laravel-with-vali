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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@index');
Route::get('/bootstrap-components', 'HomeController@bootstrapComponents');
Route::get('/form-components', 'HomeController@formComponents');
Route::get('/form-custom', 'HomeController@formCustom');
Route::get('/form-samples', 'HomeController@formSamples');
Route::get('/form-notifications', 'HomeController@formNotifications');
