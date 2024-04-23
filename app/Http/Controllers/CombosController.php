<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\Models\Product;
>>>>>>> c39d68f1287b61a8d01058ce949e4211f983e026
use Illuminate\Http\Request;

class CombosController extends Controller
{
    //
    public function index()
    {
<<<<<<< HEAD
        return view('/auth/combos');
=======
        $combos = Product::where('slug', '=', 'combos')->get();

        return view('/auth/combos', ['combos' => $combos]);
>>>>>>> c39d68f1287b61a8d01058ce949e4211f983e026
    }
}
