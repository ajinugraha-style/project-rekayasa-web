<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampGearController;

// Pastikan halaman utama (/) memanggil CampGearController
Route::get('/', [CampGearController::class, 'index']);
Route::get('/gear/{id}', [CampGearController::class, 'show'])->name('gear.show');