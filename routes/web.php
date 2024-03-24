<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarrierController;

//общедоступные маршруты
Route::middleware([])->group(function () {

    //приветствие
    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');

    //главная
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //пример заказов
    Route::get('/ordersdemo', function () {
        return view('ordersdemo');
    })->name('ordersdemo');

    //пример перевозчиков
    Route::get('/carriersdemo', function () {
        return view('carriersdemo');
    })->name('carriersdemo');

    //пример создания
    Route::get('/createdemo', function () {
        return view('createdemo');
    })->name('createdemo');

    //о нас
    Route::get('/about', function () {
        return view('about');
    })->name('about');

    //функции
    Route::get('/faq', function () {
        return view('faq');
    })->name('faq');

    //тарифы
    Route::get('/tarif', function () {
        return view('tarif');
    })->name('tarif');

    //предупреждение
    Route::get('/mediator', function () {
        return view('mediator');
    })->name('mediator');
});

//маршруты для авторизированных пользователей
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    
    //метод вывода заказов
    Route::get('/orders', [OrdersController::class, 'showOrders'],)->name('orders');

    //перевозчики
    Route::get('/carriers', [CarrierController::class, 'showCarriers'], function () {
        return view('carriers');
    })->name('carriers');

    //создание
    Route::get('/create', function () {
        return view('create');
    })->name('create');

    //админ панель
    Route::get('/adminpanel', [UserController::class, 'showUsers'],function () {
        return view('adminpanel');
    })->name('adminpanel');
});

//дополнительные маршруты в зависимости от роли пользователя
Route::middleware(['auth'])->group(function () {
    
    //метод вывода заказов
    Route::get('/orders', [OrdersController::class, 'showOrders'])->name('orders');

    //метод удаления заказов
    Route::delete('/orders/{id}', [OrdersController::class, 'destroy'])->name('orders.destroy');
});