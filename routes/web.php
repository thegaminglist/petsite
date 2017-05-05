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

Route::group(['prefix' => 'admin'], function() {
    Route::group(['middleware' => 'backend_guest'], function() {
        Route::get('login', 'Admin\AuthController@showLoginForm');
        Route::post('login', 'Admin\AuthController@login');
    });

    Route::group(['middleware' => 'backend'], function() {
        Route::post('logout', 'Admin\AuthController@logout');

        Route::get('module/enable/{key}', 'Admin\ModuleController@enable');
        Route::get('module/disable/{key}', 'Admin\ModuleController@disable');

        Route::get('modules', 'Admin\ModuleController@index');

        Route::resource('users', 'Admin\UserController');
        Route::resource('admins', 'Admin\AdminController');
        Route::resource('events', 'Admin\EventController');
    });
    
});
