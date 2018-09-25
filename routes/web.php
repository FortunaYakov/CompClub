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

Route::get('/', 'HomeController@index');


// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/computer', 'ComputerController@index');
Route::post('/computer', 'ComputerController@store')->name('computer.store');
Route::post('/computer/{computer}', 'ComputerController@update')->name('computer.update');
Route::post('/computer/{computer}/delete', 'ComputerController@delete');

Route::get('/lease', 'LeaseController@index');
Route::post('/lease', 'LeaseController@store')->name('lease.store');
Route::post('/lease/{lease}', 'LeaseController@update')->name('lease.update');
Route::post('/lease/{lease}/delete', 'LeaseController@delete');

Route::get('/staff', 'StaffController@index');
Route::post('/staff', 'StaffController@store')->name('staff.store');
Route::post('/staff/{staff}', 'StaffController@update')->name('staff.update');
Route::post('/staff/{staff}/delete', 'StaffController@delete');

Route::get('/tariff', 'TariffController@index');
Route::post('/tariff', 'TariffController@store')->name('tariff.store');
Route::post('/tariff/{tariff}', 'TariffController@update')->name('tariff.update');
Route::post('/tariff/{tariff}/delete', 'TariffController@delete');

Route::get('/typeComputer', 'TypeComputerController@index');
Route::post('/typeComputer', 'TypeComputerController@store')->name('typeComputer.store');
Route::post('/typeComputer/{typeComputer}', 'TypeComputerController@update')->name('typeComputer.update');
Route::post('/typeComputer/{typeComputer}/delete', 'TypeComputerController@delete');