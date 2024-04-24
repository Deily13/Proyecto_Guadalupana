<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CombosController extends Controller
{
    //
    public function index()
    {
        $combos = Product::where('slug', '=', 'combos')->get();

        return view('/auth/combos', ['combos' => $combos]);
    }
}
