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
use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'index']);

use App\Http\Controllers\AboutController;
Route::get('/about', [AboutController::class, 'about']);

use App\Http\Controllers\DocterController;
Route::get('/doctor', [DocterController::class, 'doctor']);

use App\Http\Controllers\DrugsController;
Route::get('/drugs', [DrugsController::class, 'drugs']);

use App\Http\Controllers\PatientController;
Route::get('/patient', [PatientController::class, 'patient']);

use App\Http\Controllers\SupplierController;
Route::get('/supplier', [SupplierController::class, 'supplier']);



Route::get('/about', [AboutController::class, 'about']);
Route::get('/product', [ProductController::class, 'index']);

