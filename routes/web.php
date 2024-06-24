<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;




Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/pendaftaran',[HomeController::class, 'pendaftaran'])->name('pendaftaran')->middleware('guest');

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'dashIndex'])->name('dashboard.index');
    Route::get('/data-pendaftaran/detail/{daftar}', [DashboardController::class, 'show'])->name('dp.detail');
    Route::get('/data-pendaftaran/edit/{daftar}', [DashboardController::class, 'edit'])->name('dp.edit');
    Route::get('/users', [DashboardController::class, 'users'])->name('users');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
});
