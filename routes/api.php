<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyApiController;
use App\Http\Controllers\EmployeeApiController;

Route::apiResource('/companies', CompanyApiController::class);
Route::apiResource('/employees', EmployeeApiController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
