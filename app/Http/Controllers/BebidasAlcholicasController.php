<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class BebidasAlcholicasController extends Controller
{
    public function index()
    {
        $bebidas = Product::where('slug', '=', 'bebidas-alcoholicas', )->get();

        return view('/auth/bebidas-alcoholicas', ['bebidas' => $bebidas]);
    }
}

//*campos de formulario

//producto 
//cantidad