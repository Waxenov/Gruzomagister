<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\formloadmodel;

class UserController extends Controller
{
    public function showUsers()
    {
        //вывод всех данных пользователей
        $users = User::all();

        //количество заказов для каждого заказчика
        $clients = User::role('client')
            ->leftJoin('formcreate', 'users.phone', '=', 'formcreate.phone') //присоединение таблицы заказов
            ->select('users.*', DB::raw('COUNT(formcreate.phone) as orders_count')) //подсчет пользователей и заказов
            ->groupBy('users.phone') //групировка результатов по телефону пользователя
            ->get();

        return view('adminpanel', compact('users', 'clients'));
    }

}