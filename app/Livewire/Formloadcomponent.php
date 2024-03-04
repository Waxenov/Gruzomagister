<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\formloadmodel;
use Illuminate\Support\Facades\Auth;

class Formloadcomponent extends Component
{
    public $cargoType;
    public $cargoDescribe;
    public $weight;
    public $readyDate;
    public $loadPlace;
    public $unloadPlace;
    public $truckType;

    public function submitForm()
    {
        $user = Auth::user();

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

    }
    public function render()
    {
        return view('livewire.formloadcomponent');
    }
}
