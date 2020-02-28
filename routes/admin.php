<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', 'DashboardController')->name('dashboard');

Route::resource('users', 'UsersController');
