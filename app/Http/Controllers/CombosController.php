<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CombosController extends Controller
{
    //
    public function index()
    {
        return view('/auth/combos');
    }
}
