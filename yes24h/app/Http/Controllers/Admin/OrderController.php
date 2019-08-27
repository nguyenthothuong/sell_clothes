<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use App\OrderInfo;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index(Request $request)
    {
    	$orders=Order::all();
    	
        return view('admin.orders.index',compact('orders'));
    }
}
