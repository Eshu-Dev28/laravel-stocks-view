<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StockController;

Route::resource('stocks', StockController::class);
Route::post('stocks/buy/{id}', [StockController::class, 'buyNow'])->name('stocks.buy');
Route::get('/stocks/{id}', [StockController::class, 'show'])->name('stocks.show');
