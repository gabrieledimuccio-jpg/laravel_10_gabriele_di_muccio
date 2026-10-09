<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/chi-siamo', [PublicController::class, 'chi_siamo'])->name('chi-siamo');
Route::get('/galleria', [PublicController::class, 'index'])->name('galleria');
Route::get('/profilo', [PublicController::class, 'profilo'])->name('profilo')->middleware('auth');

// GalleryController
Route::get('/gallery/create', [GalleryController::class, 'create'])->name('gallery.create')->middleware('auth');
Route::post('/gallery/store', [GalleryController::class, 'store'])->name('gallery.store')->middleware('auth');
Route::get('/gallery/index', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('/gallery/show/{gallery}', [GalleryController::class, 'show'])->name('gallery.show');