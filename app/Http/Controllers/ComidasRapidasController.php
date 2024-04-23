<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\Models\Product;
>>>>>>> c39d68f1287b61a8d01058ce949e4211f983e026
use Illuminate\Http\Request;

class ComidasRapidasController extends Controller
{
    //
    public function index()
    {
<<<<<<< HEAD
        return view('/auth/comidas-rapidas');
=======
        $comidas = Product::where('slug', '=', 'comidas-rapidas')->get();
        return view('/auth/comidas-rapidas', ['comidas' => $comidas]);
>>>>>>> c39d68f1287b61a8d01058ce949e4211f983e026
    }
}
