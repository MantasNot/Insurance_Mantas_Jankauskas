<?php

use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\CarsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('client', InsuranceController::class);
Route::resource('cars', CarsController::class);

Route::get('/create', function () {
    return view('client/create');
});


