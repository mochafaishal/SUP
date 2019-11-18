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
Route::get('/add-user', 'UserController@create')->name('add-user');
Route::get('/edit-user', 'UserController@edit')->name('edit-user');
Route::put('/user/update/{id}', 'UserController@update');
Route::get('/user/delete/{id}', 'UserController@delete');
Route::get('setting-user', 'SettingUserController@index')->name('setting-user');
Route::get('profile', 'ProfileController@index')->name('profile');

Route::get('/aircraft-list', 'AircraftListController@index')->name('aircraft-list');
Route::get('/add-aircraft', 'AircraftListController@create')->name('add-aircraft');
Route::post('/aircraft-list/store', 'AircraftListController@store');
Route::get('/edit-aircraft', 'AircraftListController@edit')->name('edit-aircraft');
Route::get('/detail-aircraft/{id}', 'AircraftListController@detail');
Route::get('/aircraft-list/delete/{id}', 'AircraftListController@delete');

Route::get('/aircraft-utilization', 'AircraftUtilizationController@index')->name('aircraft-utilization');
Route::get('/detail-aircraft-utilization/{id}', 'AircraftUtilizationController@detail');

Route::get('angine', 'AngineController@index')->name('agine');
Route::get('add-angine', 'AngineController@create')->name('add-angine');
Route::get('edit-angine', 'AngineController@edit')->name('edit-angine');
Route::post('/engine/store', 'AngineController@store');

// show insert komponen aircraft
Route::get('/add-airframe', 'AircraftListController@list');
Route::get('/add-apu', 'AircraftListController@listapu');
Route::get('/add-landing', 'AircraftListController@listlanding');
Route::get('/add-engine1', 'AircraftListController@listengine1');
Route::get('/add-engine2', 'AircraftListController@listengine2');
Route::get('/add-maintenance-aircraft', 'AircraftListController@listmaintenance');

// insert komponen aircraft
Route::post('/engine1/store', 'Engine1Controller@store');
Route::post('/engine2/store', 'Engine2Controller@store');
Route::post('/airframe/store', 'AirframeController@store');
Route::post('/apu/store', 'ApuController@store');
Route::post('/landing-gear/store', 'LandingController@store');
Route::post('/add-maintenance-aircraft/store', 'MaintenanceaircraftController@store');



Route::get('/maintenance', 'MaintenanceController@index')->name('maintenance');
Route::get('/add-maintenance', 'MaintenanceController@create')->name('add-maintenance');
Route::post('/maintenance/store', 'MaintenanceController@store');
Route::get('/edit-maintenance', 'MaintenanceController@edit')->name('edit-maintenance');
Route::put('/maintenance/update/{id}', 'MaintenanceController@update');
Route::get('/maintenance/delete/{id}', 'MaintenanceController@delete');

Route::get('/maintenance-reserve', 'MaintenanceReserveController@index');
Route::get('/add-maintenance-reserve', 'MaintenanceReserveController@create');
Route::post('/maintenance-reserve/store', 'MaintenanceReserveController@store');
Route::get('/edit-maintenance-reserve', 'MaintenanceReserveController@edit')->name('edit-maintenance-reserve');
Route::get('/detail-maintenance-reserve/{id}', 'MaintenanceReserveController@detail');
Route::get('/maintenance-reserve/cetak_pdf/{id}', 'MaintenanceReserveController@cetak_pdf');

// Add maintenance reserve komponen
Route::get('/add-maintenance-reserve-engine1', 'MaintenanceReserveController@engine1');
// Route::get('/add-maintenance-reserve-engine1', 'MaintenanceReserveController@showengine1');
Route::post('/add-maintenance-reserve-engine1/storeengine', 'MaintenanceReserveController@storeengine');

Route::get('/add-maintenance-reserve-engine2', 'MaintenanceReserveController@engine2');
Route::post('/add-maintenance-reserve-engine2/storeengine2', 'MaintenanceReserveController@storeengine2');


Route::get('/add-maintenance-reserve-airframe', 'MaintenanceReserveController@airframe');
Route::post('/add-maintenance-reserve-airframe/storeairframe', 'MaintenanceReserveController@storeairframe');

Route::get('/add-maintenance-reserve-apu', 'MaintenanceReserveController@apu');
Route::post('/add-maintenance-reserve-apu/storeapu', 'MaintenanceReserveController@storeapu');

Route::get('/add-maintenance-reserve-landing', 'MaintenanceReserveController@landing');
Route::post('/add-maintenance-reserve-landing/storelanding', 'MaintenanceReserveController@storelanding');

// export excel
Route::get('/maintenance-reserve-report/export_excel', 'MaintenanceReserveController@export_excel');