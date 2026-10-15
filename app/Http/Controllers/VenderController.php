<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vender;
class VenderController extends Controller
{
    public function login()
    {
     return view('backend/vender/login');
    }
      public function signup()
    {
     return view('backend/vender/signup');
    }
       public function storeVender(Request $request)
       {
         $request->validate([
          "full_name" => "required",
          "email" => "required|email|unique:venders,email",
          "password" => "required",
         ]);

        Vender::create([
          "full_name" => $request->full_name,
          "email" => $request->email,
          "password" => $request->password
        ]);

        return redirect('backend/vender/login')->with('msg','Registerd Successfully');


       }
       
      public function index()
    {
     return view('backend/vender/index');
    }
    public function venderAddproduct()
    {
      return view('backend/vender/add-products');
    }
      public function venderViewproduct()
    {
      return view('backend/vender/view-products');
    }

    public function venderUpdateproduct(){
  return view('backend/vender/edit-products');
    }
    public function venderOrderHistory()
    {
    return view('backend/vender/order-history');
    }

    public function venderOrderDetails()
    {
      return view('backend/vender/order-details');
    }

    public function venderUsers()
    {
      return view('backend/vender/user');
    }

    public function venderProfile()
    {
      return view('backend/vender/settings');
    }

}