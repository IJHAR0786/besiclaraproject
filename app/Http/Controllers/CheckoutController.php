<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function ordercheck()
    {
        return view('frontend/order-check');
    }
}
