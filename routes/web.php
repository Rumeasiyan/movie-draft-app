<?php

use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;

Route::get('/', MoviesController::class . '@index');

Route::get('/create', function () {
    return view('create');
})->name('create');


Route::post('/store', MoviesController::class . '@store')->name('store');

Route::get('/edit/{id}', MoviesController::class . '@edit')->name('edit');

Route::delete('/delete/{id}', MoviesController::class . '@destroy')->name('delete');

Route::put('/update/{id}', MoviesController::class . '@update')->name('update');