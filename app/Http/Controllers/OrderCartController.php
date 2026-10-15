<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderCartController extends Controller
{
  public function orderProductList()
  {
    return view('frontend/order-cart-list');
  }
}
