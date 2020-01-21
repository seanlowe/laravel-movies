<?php

Route::get('/', 'MovieController@index')->name('home');

Route::get('/signup', 'RegistrationController@create');

Route::get('/signin', 'SessionsController@create');