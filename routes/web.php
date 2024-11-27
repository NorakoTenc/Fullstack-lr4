<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShrineController;
use App\Http\Controllers\RedirectController;

// Редірект з головної сторінки на сторінку вибору святині
Route::redirect('/', '/ShrineChoose');

// Маршрут для відображення списку всіх святинь
Route::get('/ShrineChoose', [ShrineController::class, 'index'])->name('ShrineChoose');

// Динамічний маршрут для відображення конкретної святині за ID
Route::get('/Shrine/{id}', [ShrineController::class, 'show'])->name('Shrine.show');

// Single Action Controller для редіректу (приклад)
Route::get('/redirect', RedirectController::class)->name('redirectToShrineChoose');
