<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login'
        ]);
    }

    public function store(Request $request)
    {
        return response()->json([
            'success' => 'Got Simple Ajax Request.',
            'ontol' => $request->name
        ]);
        // return view('contoh' , [
        //     'title' => 'Login',
        //     'data'=> $request->form
        // ]);
    }

    public function contoh()
    {
        return view('contoh', [
            'title' => 'Login'
        ]);
    }
}
