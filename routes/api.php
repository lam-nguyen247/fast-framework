<?php
use Fast\Supports\Facades\Route;

Route::post('auth/login', 'AuthController@login')->name('login');

Route::group(['middleware' => 'api:auth'], function () {
	Route::get('auth/logout', 'AuthController@logout')->name('logout');

	Route::get('get-current-user', 'AuthController@getCurrentUser')->name('getCurrentUser');

	Route::group(['prefix' => 'users'], function () {
		Route::get('', 'UserController@index');
		Route::post('', 'UserController@store');
	});
});

