<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdersController;

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

// Общедоступные маршруты
Route::middleware([])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');

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

    Route::get('/faq', function () {
        return view('faq');
    })->name('faq');

    Route::get('/tarif', function () {
        return view('tarif');
    })->name('tarif');

    Route::get('/mediator', function () {
        return view('mediator');
    })->name('mediator');
});

// Маршруты для аутентифицированных пользователей
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Маршрут для страницы заказов
    
    Route::get('/orders', [OrdersController::class, 'showOrders'],)->name('orders');

    Route::get('/carriers', function () {
        return view('carriers');
    })->name('carriers');

    Route::get('/create', function () {
        return view('create');
    })->name('create');
});

// Дополнительные маршруты в зависимости от роли пользователя
Route::middleware(['auth'])->group(function () {
    
    Route::get('/orders', [OrdersController::class, 'showOrders'])->name('orders');
    Route::delete('/orders/{id}', [OrdersController::class, 'destroy'])->name('orders.destroy');
});