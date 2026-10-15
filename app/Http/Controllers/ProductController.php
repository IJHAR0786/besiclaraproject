<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
     public function productDetails()
    {
        return view('frontend/product-details');
    }
}
