<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    /*public function list()
    {
        return view ('admin.pages.delivery.list');
    }*/

    public function orderlist()
    {
        $orders = Order::all();
        return view('admin.pages.order.order', compact('orders'));
    }
    
}
