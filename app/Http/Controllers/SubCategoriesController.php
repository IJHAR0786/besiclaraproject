<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubCategoriesController extends Controller
{
        public function subcategories()
    {
        return view('frontend/sub-categories');
    }
}
