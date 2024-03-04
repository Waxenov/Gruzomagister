<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\formloadmodel;

class YourLoads extends Component
{
    public $loads;

    public function __construct()
    {
        $this->loads = formloadmodel::where('name', auth()->id())->get();
        $this->loads = formloadmodel::where('phone', auth()->id())->get();
    }

    public function render()
    {
        return view('components.your-loads', ['loads' => $this->loads]);
    }
}

