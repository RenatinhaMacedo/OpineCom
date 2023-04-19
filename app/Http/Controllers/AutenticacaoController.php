<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AutenticacaoController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'senha' => 'required',
            'tipo' => 'required|in:emp,usr'
        ]);

        if (!Auth::guard($request->tipo)->attempt(['email' => $request->email, 'password' => $request->senha])) {
            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        return redirect()->route('home');
    }

    public function logout()
    {
        Auth::guard('usr')->logout();
        Auth::guard('emp')->logout();

        return redirect()->route('home');
    }
}
