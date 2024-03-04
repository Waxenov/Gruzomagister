<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\formloadmodel;
use Illuminate\Support\Facades\Auth;

class FormSaveController extends Controller
{
    public function formsaves()
    {   $userId = Auth::id(); 
        
        $formData = formloadmodel::all(); 
        return view('orders', compact('formData')); 
    }

}
