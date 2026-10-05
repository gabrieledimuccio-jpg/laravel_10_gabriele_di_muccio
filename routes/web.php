<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/chi-siamo', [PublicController::class, 'chi_siamo'])->name('chi-siamo');
Route::get('/profilo', [PublicController::class, 'profilo'])->name('profilo')->middleware('auth');
