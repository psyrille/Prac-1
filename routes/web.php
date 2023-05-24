<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

Route::get('/', function () {
    return view('login');
});
Route::resource('index', CompanyController::class);
Route::resource('companies', CompanyController::class);