<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authenficationController extends Controller
{
    function s_authentifier () {
        \request()->validate([
           'email' => ['required','email'],
            'password' => ['required'],
        ]);

        $resultat = auth()->attempt([
            'email' => \request('email'),
            'password' => \request('password'),
        ]);

        if ($resultat) {
            return response()->json([
                'message' => "authentication success"
            ], '200');
        }
        else {
            return response()->json([
                'message' => "Authentication Failed"
            ], 400);
        }
    }
}
