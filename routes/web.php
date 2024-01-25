<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
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
Route::get('/', [AuthController::class , 'login']);
Route::post('/login', [AuthController::class , 'postLogin']);
Route::get('/dashboard', [DashboardController::class, 'showDashboard']);
Route::get('/employees', [EmployeeController::class, 'showEmployeeList']);

// Route::group(['middleware' => ['auth']] , function() {
    
// });

