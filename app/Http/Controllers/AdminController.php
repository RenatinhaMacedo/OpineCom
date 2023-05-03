<?php

namespace App\Http\Controllers;

use App\Models\Opiniao;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Admin()
    {
        return view('usuarios.login');
    }

    public function home()
    {
        $opinioes = Opiniao::all();
        return view('home', compact('opinioes'));
    }
}
