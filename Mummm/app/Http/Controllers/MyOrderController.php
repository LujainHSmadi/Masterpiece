<?php

namespace App\Http\Controllers;

use App\Models\MainOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyOrderController extends Controller
{
    public function MyOrder()
    {

        if (Auth::id()) {
            $main_orders = MainOrder::where('user_id', '=', auth()->user()->id)->get();
            // return $main_orders;
            return view('pages.MyOrders', compact('main_orders'));
        }
    }
    public function ShowMyOrder($id)
    {

        if (Auth::id()) {
              $main_order = MainOrder::find($id);
            // return $main_order->orders;
            return view('pages.ShowMyOrder', compact('main_order'));
        }
    }
}
