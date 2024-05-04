<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class BebidasController extends Controller
{
    //
    public function index()
    {
        $refrescos = Product::where('slug', '=', 'refrescos')->get();
        return view('/auth/bebidas', ['refrescos' => $refrescos]);
    }
}

