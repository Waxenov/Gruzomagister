<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\formloadmodel;
use Illuminate\Support\Facades\Auth;

class Formloadcomponent extends Component
{
    public $cargoType;      //тип груза
    public $cargoDescribe;  //описание груза
    public $weight;         //вес груза
    public $readyDate;      //дата готовности
    public $loadPlace;      //место загрузки
    public $unloadPlace;    //место разгрузки
    public $truckType;      //тип кузова

    public function submitForm()
    {
        $user = Auth::user(); //получение данных пользователя для записи в таблицу заказов

        formloadmodel::create([
            'cargo_type' => $this->cargoType,
            'cargo_describe' => $this->cargoDescribe,
            'weight' => $this->weight,
            'ready_date' => $this->readyDate,
            'load_place' => $this->loadPlace,
            'unload_place' => $this->unloadPlace,
            'truck_type' => $this->truckType,
            'surname' => $user->surname,
            'name' => $user->name,
            'patronymic' => $user->patronymic,
            'phone' => $user->phone,
        ]);

        return redirect()->route('orders'); //перенаправление на страницу заказов
    }
    public function render()
    {
        return view('livewire.formloadcomponent');
    }
}