<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginRegisterAsWhoController;
use App\Http\Controllers\VacancyApplicationController;
use App\Http\Controllers\VacancyController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('guest');
    Route::get('/entrar-como', [LoginRegisterAsWhoController::class, 'login'])->name('login');
    Route::get('/cadastrar-como', [LoginRegisterAsWhoController::class, 'register'])->name('registerAsWho');
});


Route::middleware('auth')->group(function () {
    //candidate
    Route::get('/detalhe/vaga/{id}', [VacancyController::class, 'detail'])->name('vacancy.detail');
    Route::post('/apply/{id}', [VacancyApplicationController::class, 'apply'])->name('vacancy.apply');

    Route::get('/dashboard', [DashboardController::class, 'index',])->middleware(['auth', 'verified'])->name('dashboard');
});

// Company
Route::middleware('auth')->group(function () {
    Route::get('/criar-vagas', [VacancyController::class, 'create'])->name('company.create-job');
    Route::post('/criar-vagas', [VacancyController::class, 'store'])->name('company.store-job');
    Route::get('/candidatos', [CandidateController::class, 'show'])->name('company.candidates');
});

Route::get('/sobre', [AboutController::class, 'index'])->name('aboutUs');
Route::get('/vagas', [VacancyController::class, 'show'])->name('vacancies.show');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';