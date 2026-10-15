<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register()
    {
        return view('frontend/register');
    }
    
      public function login()
    {
        return view('frontend/login');
    }
       public function index()
    {
        return view('backend/user/index');
    }
      public function orderHistory()
      {
        return view('backend/user/order-history');
      }
       public function orderDetails()
      {
        return view('backend/user/order-details');
      }
         public function settings()
      {
        return view('backend/user/settings');
      }
    }
