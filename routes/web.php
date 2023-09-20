<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;

// Route::get('/admin', [AdminController::class, 'index']);

Route::get('/admin', [AdminController::class, 'index']);

Route::get('/companies/add', [AdminController::class, 'create']);
Route::post('/companies/add', [AdminController::class, 'store']);
Route::get('/companies/delete/{id}', [AdminController::class, 'delete']);
Route::get('/companies/view', [AdminController::class, 'view']);
Route::get('/companies/update/{id}',[AdminController::class, 'update']);
Route::post('/companies/update/{id}',[AdminController::class, 'edited']);

Route::get('/employees/add', [EmployeeController::class, 'create']);
Route::post('/employees/add', [EmployeeController::class, 'store']);
Route::get('/employees/view', [EmployeeController::class, 'view']);
Route::get('/employees/delete/{id}', [EmployeeController::class, 'delete']);
Route::get('/employees/update/{id}',[EmployeeController::class, 'update']);
Route::post('/employees/update/{id}',[EmployeeController::class, 'edited']);

Route::get('/companies/detail/{id}', [AdminController::class, "detail"]);
Route::get('/employees/detail/{id}', [EmployeeController::class, "detail"]);


Route::get('/', [AdminController::class, 'profile']);
Route::get('/home', [AdminController::class, 'profile']);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
