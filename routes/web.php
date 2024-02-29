<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;
use \App\Http\Controllers\SectionController;
use \App\Http\Controllers\DesignationController;
use \App\Http\Controllers\PositionController;

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
Route::get('/departments',[DepartmentController::class,'showDepartmentList']);
Route::get('/sections',[SectionController::class,'showSectionList']);
Route::get('/designations',[DesignationController::class,'showDesignationList']);
Route::get('/positions',[PositionController::class,'showPositionList']);
Route::get('/schedules',[DashboardController::class,'showSchedule']);


Route::post('save-department' , [DepartmentController::class, 'saveDepartment']);
Route::post('save-section' , [SectionController::class, 'saveSection']);
Route::post('save-designation',[DesignationController::class,'saveDesignation']);
Route::post('save-employee',[EmployeeController::class,'saveEmployee']);
Route::post('save-position',[PositionController::class,'savePosition']);
Route::post('save-schedule',[DashboardController::class,'saveSchedule']);




// Route::group(['middleware' => ['auth']] , function() {

// });

