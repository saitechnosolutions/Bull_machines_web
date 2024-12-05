<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard');
});


// LOGIN

Route::resource('auth',LoginController::class);

// DASHBOARD

Route::resource('dashboard',DashboardController::class);


// EMPLOYEER

Route::resource('employee',EmployeeController::class);


// LOCATIONS

// COUNTRY
Route::get('/locations/country',[LocationController::class,'countryindex']);
Route::post('/country_store',[LocationController::class,'countrystore']);
// STATE
Route::get('/locations/state',[LocationController::class,'stateindex']);
Route::post('/state_store',[LocationController::class,'statestore']);
// DISTRICT
Route::get('/locations/district',[LocationController::class,'districtindex']);
Route::post('/district_store',[LocationController::class,'districtstore']);
// PANCHAYAT
Route::get('/locations/panchayat',[LocationController::class,'panchayatindex']);
Route::post('/panchayat_store',[LocationController::class,'panchayatstore']);