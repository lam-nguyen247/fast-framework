<?php
use Fast\Supports\Facades\Route;

Route::get('{id}/test', 'DemoController@index');
Route::get('users', 'UserController@index');

Route::post('login', 'AuthController@login')->name('login');
Route::post('logout', 'AuthController@logout')->name('logout');

Route::get('get-current-user', 'AuthController@getCurrentUser')->name('getCurrentUser');