<?php

use Illuminate\Support\Facades\Route;




Route::get('/',[\App\Http\Controllers\Backend\DashboardController::class,'index'])->name('dashboard');
Route::get('/categories',[\App\Http\Controllers\Backend\DashboardController::class,'categories'])->name('categories.index');
