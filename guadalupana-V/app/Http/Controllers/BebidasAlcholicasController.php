<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BebidasAlcholicasController extends Controller
{
    public function index()
    {
        return view('bebidas-alcoholicas');
    }
}
