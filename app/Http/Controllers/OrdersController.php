<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\formloadmodel;

class OrdersController extends Controller
{
    //вывод заказов основанных на роли пользователя и поисковом запросе
    //для заказчика перевозчика и админа
    public function showOrders(Request $request)
    {   
        //вывод всех пользователей и заказов
        $user = $request->user();
        $formData = formloadmodel::all();

        //Заказчик
        if ($user->hasRole('client')) {
            
           //поиск из введенных данных
            $searchQuery = $request->input('search');

           //вывод заказов для заказчика
            $userOrders = formloadmodel::where('phone', $user->phone);

            //запрос пустой - вывод всех заказов заказчика
            if (!empty($searchQuery)) {
                $userOrders->where(function($query) use ($searchQuery) {
                    $query->where('cargo_type', 'like', "%$searchQuery%")
                    ->orWhere('cargo_describe', 'like', "%$searchQuery%")
                    ->orWhere('load_place', 'like', "%$searchQuery%")
                    ->orWhere('unload_place', 'like', "%$searchQuery%")
                    ->orWhere('ready_date', 'like', "%$searchQuery%")
                    ->orWhere('weight', 'like', "%$searchQuery%")
                    ->orWhere('created_at', 'like', "%$searchQuery%")
                    ->orWhere('truck_type', 'like', "%$searchQuery%")
                    ->orWhere('id', 'like', "%$searchQuery%");
                });
            }
            //отфильтрованные заказы на странице заказчику
            $userOrders = $userOrders->get();
            
            return view('client.orders', compact('userOrders'));
            
        } elseif ($user->hasRole('carrier')) {
            

        //поиск из введенных данных
        $searchQuery = $request->input('search');

        //Перевозчик
        if (empty($searchQuery)) {
            //запрос пустой - вывод всех заказов
            $orders = formloadmodel::all();
        } else {

            $formData = formloadmodel::where('surname', 'like', "%$searchQuery%")
            ->orWhere('name', 'like', "%$searchQuery%")
            ->orWhere('patronymic', 'like', "%$searchQuery%")
            ->orWhere('cargo_type', 'like', "%$searchQuery%")
            ->orWhere('cargo_describe', 'like', "%$searchQuery%")
            ->orWhere('load_place', 'like', "%$searchQuery%")
            ->orWhere('unload_place', 'like', "%$searchQuery%")
            ->orWhere('ready_date', 'like', "%$searchQuery%")
            ->orWhere('weight', 'like', "%$searchQuery%")
            ->orWhere('created_at', 'like', "%$searchQuery%")
            ->orWhere('truck_type', 'like', "%$searchQuery%")
            ->orWhere('phone', 'like', "%$searchQuery%")
            ->orWhere('id', 'like', "%$searchQuery%")
            ->get();
        }
        //все заказы на странице перевозчику
        return view('carrier.orders', compact('formData', 'searchQuery'));

        } elseif ($user->hasRole('admin')) {
            

        //поиск из введенных данных
        $searchQuery = $request->input('search');

        //Админ
        if (empty($searchQuery)) {
            //запрос пустой - вывод всех заказов
            $orders = formloadmodel::all();
        } else {

            $formData = formloadmodel::where('surname', 'like', "%$searchQuery%")
            ->orWhere('name', 'like', "%$searchQuery%")
            ->orWhere('patronymic', 'like', "%$searchQuery%")
            ->orWhere('cargo_type', 'like', "%$searchQuery%")
            ->orWhere('cargo_describe', 'like', "%$searchQuery%")
            ->orWhere('load_place', 'like', "%$searchQuery%")
            ->orWhere('unload_place', 'like', "%$searchQuery%")
            ->orWhere('ready_date', 'like', "%$searchQuery%")
            ->orWhere('weight', 'like', "%$searchQuery%")
            ->orWhere('created_at', 'like', "%$searchQuery%")
            ->orWhere('truck_type', 'like', "%$searchQuery%")
            ->orWhere('phone', 'like', "%$searchQuery%")
            ->orWhere('id', 'like', "%$searchQuery%")
            ->get();
        }
        //все заказы на странице админу
        return view('carrier.orders', compact('formData', 'searchQuery'));

        } else {
            abort(403, 'Доступ запрещен');
        }
    }
    
    //удаление заказа по id и обновление страницы
    public function destroy($id)
    {   
        $formData = formloadmodel::findOrFail($id);
        $formData->delete();
        return redirect()->route('orders');
    }
}