<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AutenticacaoController extends Controller
{
    public function loginUsuario(Request $request)
    {
        Auth::guard('usr')->attempt(['email' => $request->email, 'password' => $request->senha]);

        return redirect()->route('home');
    }

    public function loginEmpresas(Request $request)
    {
        Auth::guard('usr')->attempt(['email' => $request->email, 'password' => $request->senha]);

        return redirect()->route('home');
    }
}
