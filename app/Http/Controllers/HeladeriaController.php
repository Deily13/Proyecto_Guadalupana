<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HeladeriaController extends Controller
{
    //
    public function index()
    {
        $helados = Product::where('slug', '=', 'heladeria')->get();
        return view('/auth/heladeria', ['heladeria' => $helados]);
    }
}
