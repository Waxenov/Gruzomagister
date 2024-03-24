<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CarrierController extends Controller
{
    public function showCarriers(Request $request)
    {
        //обработка роли текущего пользователя
        $user = $request->user();
            
        //обработка поискового запроса
        $searchQuery = $request->input('search');

        if (empty($searchQuery)) {
            //запрос пустой - вывод всех перевозчиков
            $carriers = User::role('carrier')->get();

        } else {
            //поиск только из перевозчиков
            $carriers = User::role('carrier')
                ->where(function ($query) use ($searchQuery)
                {
                    //фильтры для перевозчиков
                    $query->where('id', 'like', "%$searchQuery%")
                        ->orWhere('surname', 'like', "%$searchQuery%")
                        ->orWhere('name', 'like', "%$searchQuery%")
                        ->orWhere('patronymic', 'like', "%$searchQuery%")
                        ->orWhere('phone', 'like', "%$searchQuery%");
                })
                ->get();
        }

        return view('carriers', compact('carriers', 'searchQuery'));
    }
}