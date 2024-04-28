<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RolesController extends Controller
{
    //
    public function index()
    {

        return view('/auth/administrador/roles');
    }

public function store(Request $request)
{
    $user = new User();
    $user->first_name = $request->first_name;
    $user->last_name = $request->last_name;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->identification_type = $request->identification_type;
    $user->identification_number = $request->identification_number;
    $user->phone_number = $request->phone_number;
    $user->address = $request->address;
    $user->rol = $request->rol;
    $user->password = Hash::make($request->password);

    $user->save();

    return redirect()->back()->with('success', 'Usuario creado exitosamente');
}


}
