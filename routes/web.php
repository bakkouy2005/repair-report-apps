<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RepairReportController;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth'])->group(function () {
    Route::resource('repair-reports', RepairReportController::class);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
