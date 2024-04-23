<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\Models\Product;
>>>>>>> c39d68f1287b61a8d01058ce949e4211f983e026
use Illuminate\Http\Request;

class HamburguesasController extends Controller
{
    //
    public function index()
    {
<<<<<<< HEAD
        return view('/auth/hamburguesas');
=======
        $hamburguesas = Product::where('slug', '=', 'hamburguesas')->get();
        return view('/auth/hamburguesas', ['hamburguesas' => $hamburguesas]);
>>>>>>> c39d68f1287b61a8d01058ce949e4211f983e026
    }
}
