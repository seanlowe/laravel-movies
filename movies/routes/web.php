<?php

Route::get('/', 'MovieController@index')->name('home');
Route::get('/edit', 'MovieController@edit');


Route::get('/signup', 'RegistrationController@create');
Route::post('/signup', 'RegistrationController@store');


Route::get('/signin', 'SessionsController@create')->name('login');
Route::post('/signin', 'SessionsController@store');
Route::get('/signout', 'SessionsController@destroy');