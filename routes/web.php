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

    Route::get('/ordersdemoc', function () {
        return view('ordersdemoc');
    })->name('ordersdemoc');

    Route::get('/carordersdemo', function () {
        return view('carordersdemo');
    })->name('carordersdemo');

    //пример деталей
    Route::get('/detailsdemo', function () {
        return view('detailsdemo');
    })->name('detailsdemo');

    //перевозчики
    Route::get('/carriers', [CarrierController::class, 'showCarriers'], function () {
        return view('carriers');
    })->name('carriers');

    //пример создания
    Route::get('/create', function () {
        return view('create');
    })->name('create');

    //о нас
    Route::get('/about', function () {
        return view('about');
    })->name('about');

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

    //детали заказа заказчику
    Route::get('/details', [OrdersController::class, 'orderDetails'], function () {
        return view('details');
    })->name('details');

    //детали заказа перевозчику
    Route::get('/carorders', [OrdersController::class, 'showStatusOrders'], function () {
        return view('carorders');
    })->name('carorders');

    //админ панель
    Route::get('/adminpanel', [UserController::class, 'showUsers'],function () {
        return view('adminpanel');
    })->name('adminpanel');
});

//дополнительные маршруты в зависимости от роли пользователя
Route::middleware(['auth'])->group(function () {
    
    //метод вывода заказов
    Route::get('/orders', [OrdersController::class, 'showOrders'],)->name('orders');

    //метод смены статуса заказа
    Route::post('/orders/{id}/confirmed', [OrdersController::class, 'confirmed'])->name('orders.confirmed');

    Route::post('/orders/{id}/traffic', [OrdersController::class, 'traffic'])->name('orders.traffic');

    Route::post('/orders/{id}/delivered', [OrdersController::class, 'delivered'])->name('orders.delivered');

    //метод удаления заказов
    Route::delete('/orders/{id}', [OrdersController::class, 'destroy'])->name('orders.destroy');
});