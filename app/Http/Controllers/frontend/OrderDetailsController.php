<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderDetailsController extends Controller
{
    public function orderdetails()
    {
        $order=Order::where('order_id');

    }
}
