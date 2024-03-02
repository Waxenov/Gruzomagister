<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/orders', function () {
        return view('orders');
    })->name('orders');

    Route::get('/carriers', function () {
        return view('carriers');
    })->name('carriers');

    Route::get('/create', function () {
        return view('create');
    })->name('create');

    Route::get('/about', function () {
        return view('about');
    })->name('about');
});
