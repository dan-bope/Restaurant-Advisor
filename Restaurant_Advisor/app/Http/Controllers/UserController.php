<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    function inscription() {
        $validator = Validator::make(\request()->all(), [
            'login' => 'required',
            'email' => 'email',
            'name' => 'required',
            'firstname' => 'required',
            'age' =>'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Registration Failed'
            ], 400);
        } else {
            $user = new User([
                'username' => \request('login'),
                'email' => \request('email'),
                'name' => \request('name'),
                'firstname' => \request('firstname'),
                'age' => \request('age'),
                'password' => bcrypt(\request('password')),
            ]);
            $user->save();

            return response()->json([
                'message' => 'Created'
            ],'201');
        }
    }
    function liste_user() {
        return response()->json(User::all(), '200');
    }
}
