<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HeladeriaController extends Controller
{
    //
    public function index()
    {
        $helados = Product::where('slug', '=', 'helados')->get();
        return view('/auth/heladeria', ['helados' => $helados]);
    }
}
