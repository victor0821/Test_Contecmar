<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Models\Proyecto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;


class AuthenticatedController extends Controller
{
    
    
    
    
    /*public function store(LoginRequest $request) {
        $user = User::where('name', $request->name)
                    ->where('password', $request->password)
                    ->first();
        if (!$user) abort(401, 'Credenciales incorrectas');
        Auth::login($user);
        return redirect()->route('formulario');
    }*/

    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string',
            'password' => 'required|string'
        ]);
        //dd($request);
        $user = User::where('name', $request->name)
                   ->where('password', $request->password)
                   ->first();
                   //dd($user);
        if (!$user) {
            return back()->withErrors(['name' => 'Credenciales incorrectas']);
        }
        
        Auth::login($user);
        return redirect()->route('formulario');
    }
    
}
