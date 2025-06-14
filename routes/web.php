<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientDashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::middleware(['auth', 'role:client'])->group(function () {
    Route::get('/dashboard', [ClientDashboardController::class, 'index'])->name('client.dashboard');
    Route::view('/zones', 'client.zones')->name('client.zones');
    Route::view('/network-scanning', 'client.network')->name('client.network');
    Route::view('/configuration', 'client.configuration')->name('client.configuration');
});

require __DIR__.'/auth.php';
