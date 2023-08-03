<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('all', [UserController::class, 'allEmployee']);

Route::get('getData', [UserController::class, 'getData']);

Route::get('getCustomModelData', [UserController::class, 'getCustomModelData']);

Route::get('getEmp', [UserController::class, 'getEmployee']);

Route::get('getEmpData/{id}', [UserController::class, 'getEmpData']);
