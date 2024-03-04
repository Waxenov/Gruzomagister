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

// Маршруты, доступные без авторизации
Route::middleware([])->group(function () {

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/ordersdemo', function () {
    return view('ordersdemo');
})->name('ordersdemo');

Route::get('/carriersdemo', function () {
    return view('carriersdemo');
})->name('carriersdemo');

Route::get('/createdemo', function () {
    return view('createdemo');
})->name('createdemo');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/mediator', function () {
    return view('mediator');
})->name('mediator');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/carriers', function () {
        return view('carriers');
    })->name('carriers');

    Route::get('/orders', function () {
        return view('orders');
    })->name('orders');

    Route::get('/create', function () {
        return view('create');
    })->name('create');
});
