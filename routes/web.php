<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeasiswaController;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::resource('/beasiswa', BeasiswaController::class)->except('show');
