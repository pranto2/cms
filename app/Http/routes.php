<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::group( [ 'prefix' => 'manage', 'middleware' => 'role:superadministrator|administrator|editor|author|contributor' ], function()
{
    Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
    Route::resource('/users', 'UserController@index');
    Route::resource('/users/create', 'UserController@create');
    Route::resource('/users/show', 'UserController@show');

    
});

Route::get('/home', 'HomeController@index');
