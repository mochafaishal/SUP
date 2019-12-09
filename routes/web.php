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
Route::post('/user/store', 'UserController@store');
Route::get('/add-user', 'UserController@create')->name('add-user');
Route::get('/edit-user/{id}', 'UserController@edit')->name('edit-user');
Route::put('/user/update/{id}', 'UserController@update');
Route::get('/user/delete/{id}', 'UserController@delete');
Route::get('setting-user', 'SettingUserController@index')->name('setting-user');
Route::get('profile', 'ProfileController@index')->name('profile');
// ======================================================================================


Route::get('/aircraft-list', 'AircraftListController@index')->name('aircraft-list');
Route::get('/add-aircraft', 'AircraftListController@create')->name('add-aircraft');
Route::post('/aircraft-list/store', 'AircraftListController@store');
Route::get('/edit-aircraft/{id}', 'AircraftListController@edit')->name('edit-aircraft');
Route::put('/aircraft/update/{id}', 'AircraftListController@update');
Route::get('/detail-aircraft/{id}', 'AircraftListController@detail');
Route::get('/aircraft-list/delete/{id}', 'AircraftListController@delete');


// ======================================================================================

Route::get('/aircraft-utilization', 'AircraftUtilizationController@index')->name('aircraft-utilization');
Route::get('/detail-aircraft-utilization/{id}', 'AircraftUtilizationController@detail');

// ======================================================================================
Route::get('engine', 'AngineController@index')->name('egine');
Route::get('add-angine', 'AngineController@create')->name('add-engine');
Route::get('/edit-engine/{id}', 'AngineController@edit')->name('edit-engine');
Route::put('/engine/update/{id}', 'AngineController@update');
Route::post('/engine/store', 'AngineController@store');
Route::get('/engine/delete/{id}', 'AngineController@delete');
// ======================================================================================



// show insert komponen aircraft
Route::get('/add-airframe', 'AircraftListController@list');
Route::get('/add-apu', 'AircraftListController@listapu');
Route::get('/add-landing', 'AircraftListController@listlanding');
Route::get('/add-engine1', 'AircraftListController@listengine1');
Route::get('/add-engine2', 'AircraftListController@listengine2');
Route::get('/add-maintenance-aircraft', 'AircraftListController@listmaintenance');
// ======================================================================================


// insert komponen aircraft
Route::post('/engine1/store', 'Engine1Controller@store');
Route::post('/engine2/store', 'Engine2Controller@store');
Route::post('/airframe/store', 'AirframeController@store');
Route::post('/apu/store', 'ApuController@store');
Route::post('/landing-gear/store', 'LandingController@store');
Route::post('/add-maintenance-aircraft/store', 'MaintenanceaircraftController@store');
// ======================================================================================


// edit komponen aircraft
Route::get('/edit-aircraft-engine1/{id_aircraft}', 'AircraftListController@editengine1')->name('edit-aircraft-engine1');
Route::put('/aircraft-engine1/update/{id}', 'AircraftListController@updateengine1');

Route::get('/edit-aircraft-engine2/{id_aircraft}', 'AircraftListController@editengine2')->name('edit-aircraft-engine2');
Route::put('/aircraft-engine2/update/{id}', 'AircraftListController@updateengine2');

Route::get('/edit-aircraft-airframe/{id_aircraft}', 'AircraftListController@editairframe')->name('edit-aircraft-airframe');
Route::put('/aircraft-airframe/update/{id}', 'AircraftListController@updateairframe');

Route::get('/edit-aircraft-apu/{id_aircraft}', 'AircraftListController@editapu')->name('edit-aircraft-apu');
Route::put('/aircraft-apu/update/{id}', 'AircraftListController@updateapu');

Route::get('/edit-aircraft-landing/{id_aircraft}', 'AircraftListController@editlanding')->name('edit-aircraft-landing');
Route::put('/aircraft-landing/update/{id}', 'AircraftListController@updatelanding');

Route::get('/edit-aircraft-maintenance/{id_aircraft}', 'AircraftListController@editmaintenance')->name('edit-aircraft-maintenance');
Route::put('/aircraft-maintenance/update/{id}', 'AircraftListController@updatemaintenance');

// ======================================================================================

Route::get('/maintenance', 'MaintenanceController@index')->name('maintenance');
Route::get('/add-maintenance', 'MaintenanceController@create')->name('add-maintenance');
Route::post('/maintenance/store', 'MaintenanceController@store');
Route::get('/edit-maintenance/{id}', 'MaintenanceController@edit')->name('edit-maintenance');
Route::put('/maintenance/update/{id}', 'MaintenanceController@update');
Route::get('/maintenance/delete/{id}', 'MaintenanceController@delete');
// ======================================================================================

Route::get('/maintenance-reserve', 'MaintenanceReserveController@index');
Route::get('/add-maintenance-reserve', 'MaintenanceReserveController@create');
Route::post('/maintenance-reserve/store', 'MaintenanceReserveController@store');
Route::get('/detail-maintenance-reserve/{id}', 'MaintenanceReserveController@detail');
Route::get('/maintenance-reserve/delete/{id}', 'MaintenanceReserveController@delete');
Route::get('/maintenance-reserve/cetak_pdf/{id}', 'MaintenanceReserveController@cetak_pdf');
// ======================================================================================


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
// ======================================================================================

// Edit maintenance reserve komponen
Route::get('/edit-maintenance-reserve/{maintenancereserve_id}', 'MaintenanceReserveController@edit')->name('edit-maintenance-reserve');
Route::put('/maintenance/update/{id}', 'MaintenanceReserveController@update');

Route::get('/edit-maintenance-reserve-engine1/{maintenancereserve_id}', 'MaintenanceReserveController@editeengine1')->name('edit-maintenance-reserve-engine1');
Route::put('/maintenance-reserve-engine1/update/{id}', 'MaintenanceReserveController@updateengine1');

Route::get('/edit-maintenance-reserve-engine2/{maintenancereserve_id}', 'MaintenanceReserveController@editeengine2')->name('edit-maintenance-reserve-engine2');
Route::put('/maintenance-reserve-engine2/update/{id}', 'MaintenanceReserveController@updateengine2');

Route::get('/edit-maintenance-reserve-airframe/{maintenancereserve_id}', 'MaintenanceReserveController@editeairframe')->name('edit-maintenance-reserve-airframe');
Route::put('/maintenance-reserve-airframe/update/{id}', 'MaintenanceReserveController@updateeairframe');

Route::get('/edit-maintenance-reserve-apu/{maintenancereserve_id}', 'MaintenanceReserveController@editeapu')->name('edit-maintenance-reserve-apu');
Route::put('/maintenance-reserve-apu/update/{id}', 'MaintenanceReserveController@updateeapu');

Route::get('/edit-maintenance-reserve-landing/{maintenancereserve_id}', 'MaintenanceReserveController@editelanding')->name('edit-maintenance-reserve-landing');
Route::put('/maintenance-reserve-landing/update/{id}', 'MaintenanceReserveController@updateelanding');

// export excel
Route::get('/maintenance-reserve-report/export_excel', 'MaintenanceReserveController@export_excel');
Route::get('/maintenance-reserve-export', 'MaintenanceReserveController@export');