<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PS\HomeController;
use App\Http\Controllers\PS\EmployeeController;
use App\Http\Controllers\PS\CompanyController;
use App\Http\Controllers\PS\ProjectController;
use App\Http\Controllers\PS\StageController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('home', [HomeController::class, 'index'])->name('home');

    Route::resource('/employees', EmployeeController::class);
    Route::resource('/companies', CompanyController::class);
    Route::resource('/projects', ProjectController::class);
    Route::resource('/stages', StageController::class);
});
