<?php

use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::middleware('guest')->group(function () {
    Volt::route('login-como-candidato', 'pages.auth.login-candidate')
        ->name('login-candidate');
    Volt::route('login-como-recrutador', 'pages.auth.login-company')
        ->name('login-company');
        
    Volt::route('cadastrar-como-candidato', 'pages.auth.register-candidate')
        ->name('register-candidate');
    Volt::route('cadastrar-como-empresa', 'pages.auth.register-company')
        ->name('register-company');


    Volt::route('forgot-password', 'pages.auth.forgot-password')
        ->name('password.request');

    Volt::route('reset-password/{token}', 'pages.auth.reset-password')
        ->name('password.reset');
});

Route::middleware('auth')->group(function () {
    Volt::route('verify-email', 'pages.auth.verify-email')
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Volt::route('confirm-password', 'pages.auth.confirm-password')
        ->name('password.confirm');
});