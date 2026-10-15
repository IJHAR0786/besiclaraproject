<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login()
    {
     return view('backend/admin/login');
    }
      public function signup()
    {
     return view('backend/admin/signup');
    }
      public function index()
    {
     return view('backend/admin/index');
    }
    public function venderAddproduct()
    {
      return view('backend/admin/add-category');
    }
      public function venderViewproduct()
    {
      return view('backend/admin/view-category');
    }

    public function venderUpdateproduct(){
  return view('backend/admin/edit-category');
    }
    public function venderOrderHistory()
    {
    return view('backend/admin/order-history');
    }

    public function venderOrderDetails()
    {
      return view('backend/admin/order-details');
    }

    public function venderUsers()
    {
      return view('backend/admin/user');
    }
      public function adminVender()
    {
      return view('backend/admin/vender');
    }

       public function products()
    {
      return view('backend/admin/products');
    }
    public function venderProfile()
    {
      return view('backend/admin/settings');
    }

}