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


// ========= EMPLOYEE MASTER ========= //

Route::resource('employe',EmployeeController::class);
// DESIGNATION
Route::get('/employee/designation',[EmployeeController::class,'designationIndex']);
Route::post('/designation_store',[EmployeeController::class,'designationstore']);
// BRANCH
Route::get('/employee/branch',[EmployeeController::class,'branchIndex']);
Route::post('/branch_store',[EmployeeController::class,'branchstore']);
Route::post('/branch_update',[EmployeeController::class,'branchupdate']);
// EMPLO

// ========= LOCATIONS MASTER ========= //

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