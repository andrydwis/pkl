<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::get('/create-users', [RegisteredUserController::class, 'create'])
    ->middleware('auth')
    ->name('create-users');

Route::post('/create-users', [RegisteredUserController::class, 'store'])
    ->middleware('auth');

Route::get('setting/password', [ChangePasswordController::class, 'edit'])
    ->name('change-password')
    ->middleware('auth');

Route::put('setting/password', [ChangePasswordController::class, 'update'])
    ->middleware('auth');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout')
    ->middleware('auth');
