<?php

namespace App\Http\Controllers\Auth\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(Request $request, User $user){


        $userData = $request->only('name','email','phone','password');
        $userData['password'] = bcrypt($userData['password']);
        //To-do: verificar um code status melhor depois
        if(!$user = $user->create($userData)) abort(500, 'Error to create a new user..');

        return response()->json([
            'data' => [
                //vou retornar o token aqui tbm já pra ele logar
                'user' => $user
            ]
        ]);
    }
}
