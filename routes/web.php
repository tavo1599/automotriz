<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StockController;

// Ruta para el Dashboard principal
Route::get('/', function () {
    return view('clients.dashboard'); // Cambia a 'clients.dashboard' si está en la carpeta 'clients'
})->name('dashboard');

// Ruta para la vista Home
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Ruta para la vista Stock
Route::resource('stocks', StockController::class);
