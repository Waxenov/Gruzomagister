<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\formloadmodel;

class OrdersController extends Controller
{
    public function showOrders(Request $request)
    {   
        $user = $request->user();
        $formData = formloadmodel::all();
        
        if ($user->hasRole('client')) {
            $userOrders = $formData->where('phone', $user->phone);
            return view('client.orders', compact('userOrders'));
            
        } elseif ($user->hasRole('carrier')) {
            return view('carrier.orders', compact('formData'));
        } else {
            abort(403, 'Доступ запрещен');
        }
    }
    public function destroy($id)
    {   
        $formData = formloadmodel::findOrFail($id);
        $formData->delete();
        return redirect()->route('orders');
    }
}
