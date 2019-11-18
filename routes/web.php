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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user', 'UserController@index')->name('user');

Route::get('/aircraft-list', 'AircraftListController@index')->name('aircraft-list');

Route::get('/aircraft-utilization', 'AircraftUtilizationController@index')->name('aircraft-utilization');

Route::get('/searching', 'SearchingController@index')->name('searching');

Route::get('setting-user', 'SettingUserController@index')->name('setting-user');

Route::get('profile', 'ProfileController@index')->name('profile');

Route::get('angine', 'AngineController@index')->name('agine');

Route::get('maintenance', 'MaintenanceController@index')->name('maintenance');

Route::get('maintenance-reserve', 'MaintenanceReserveController@index')->name('maintenance-reserve');
