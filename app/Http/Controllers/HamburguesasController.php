<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HamburguesasController extends Controller
{
    //
    public function index()
    {
        $hamburguesas = Product::where('slug', '=', 'hamburguesas')->get();
        return view('/auth/hamburguesas', ['hamburguesas' => $hamburguesas]);
    }
}


//*campos de formulario

//producto 
//cantidad