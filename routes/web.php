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
// Frontend routes
Route::get('/','HomeController@index')->name('frontend.layout');


// // Admin routes
// Route::get('/login', 'AdminController@index');
// Route::get('/dashboard', 'AdminController@showDashboard')->name('admin.dashboard');
// Route::post('/admin-dashboard', 'AdminController@adminLogin')->name('admin.dashboard');

