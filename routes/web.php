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

Route::get('/country',[LocationController::class,'countryindex']);
Route::post('/country_store',[LocationController::class,'countrystore']);