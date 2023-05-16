<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

Route::resource('/', CompanyController::class);
Route::resource('companies', CompanyController::class);