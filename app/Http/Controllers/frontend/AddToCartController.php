<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddToCartController extends Controller
{
    public function cart()
    {

        return view ('frontend.item.cart', [
            'cartData' => session('cart') ?? []
        ]);
    }
}
