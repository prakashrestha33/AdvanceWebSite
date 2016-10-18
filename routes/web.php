<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use Cornford\Googlmapper\Facades\MapperFacade;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/home/user', 'HomeController@user');
Route::post('/home/register', 'HomeController@register_user');
Route::get('/home/manage_user', 'HomeController@manage_user');
Route::get('/home/edit_user/{id}', 'HomeController@edit_user');
Route::get('/home/delete_user/{id}', 'HomeController@delete_user');