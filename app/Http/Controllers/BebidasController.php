<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\Models\Product;
>>>>>>> c39d68f1287b61a8d01058ce949e4211f983e026
use Illuminate\Http\Request;

class BebidasController extends Controller
{
    //
    public function index()
    {
<<<<<<< HEAD
        return view('/auth/bebidas');
=======
        $refrescos = Product::where('slug', '=', 'bebidas')->get();
        return view('/auth/bebidas', ['refrescos' => $refrescos]);
>>>>>>> c39d68f1287b61a8d01058ce949e4211f983e026
    }
}
