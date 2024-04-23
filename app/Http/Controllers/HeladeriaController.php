<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Illuminate\Http\Request;

class AdministradorController extends Controller
=======
use App\Models\Product;
use Illuminate\Http\Request;

class HeladeriaController extends Controller
>>>>>>> c39d68f1287b61a8d01058ce949e4211f983e026
{
    //
    public function index()
    {
<<<<<<< HEAD

        return view('/auth/admin');
=======
        $helados = Product::where('slug', '=', 'heladeria')->get();
        return view('/auth/heladeria', ['heladeria' => $helados]);
>>>>>>> c39d68f1287b61a8d01058ce949e4211f983e026
    }
}
