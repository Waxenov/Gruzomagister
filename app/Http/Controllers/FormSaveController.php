<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\formloadmodel;
use Illuminate\Support\Facades\Auth;

class FormSaveController extends Controller
{
    public function formsaves()
    {   $userPhone = Auth::user()->phone; 
        
        $formData = formloadmodel::where('phone', $userPhone)->get(); 
        return view('orders', compact('formData')); 
    }

    public function destroy($id)
    {
        $order = FormLoadModel::findOrFail($id);
        $order->delete();
        return redirect()->back()->with('Сделано');
    }

}
