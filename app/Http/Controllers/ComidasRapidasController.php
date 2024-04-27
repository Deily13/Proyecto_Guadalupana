<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ComidasRapidasController extends Controller
{
    //
    public function index()
    {
        $comidas = Product::where('slug', '=', 'comidas-rapidas')->get();
        return view('/auth/comidas-rapidas', ['comidas' => $comidas]);
    }
}


//*campos de formulario

//producto 
//cantidad