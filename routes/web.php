<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CVController;

Route::get('/', [CVController::class, 'index'])->name('cv.home');
Route::get('/download', [CVController::class, 'download'])->name('cv.download');
Route::get('/print', [CVController::class, 'print'])->name('cv.print');