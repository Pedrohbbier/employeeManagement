<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\WorkScheduleController;




Route::get('/', function () {
    return view('welcome');
});


Route::resource('employees', EmployeeController::class);
Route::resource('departments', DepartmentController::class);

Route::get('work-schedule', [WorkScheduleController::class, 'index']);
Route::get('departments', [DepartmentController::class, 'index'])->name('departments.index');



Route::get('/', [EmployeeController::class, 'index']);
