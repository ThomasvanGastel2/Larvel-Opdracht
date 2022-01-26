<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function confirmOrder($order_id){
        return $order->orderTickets;
    }
}
