<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomepageController@index')->name('homepage');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
