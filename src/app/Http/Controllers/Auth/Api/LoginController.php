<?php

namespace App\Http\Controllers\Auth\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Google\Client as GoogleClient;

class LoginController extends Controller
{
    public function login(Request $request){

        //To-do: validar request dps
        $credentials = $request->only('email', 'password');

        if(!auth()->attempt($credentials)) abort(401, 'Invalid Credentials');

        $token = auth()->user()->createToken('auth_token');

        return response()->json([
            'data' => [
                'token' => $token->plainTextToken
            ]
        ]);
    }

    public function logout(){
        //auth()->user()->tokens()->delete(); //remove todos os tokens do usuario
        auth()->user()->currentAccessToken()->delete(); //remove apenas o token da requisição atual
        return response()->json([], 204);
    }
    public function google(Request $request){
        $credentials = $request->credential;
        $client = new GoogleClient(['client_id' => '72696091362-6cedad0alpf0hmapsn9a5v3unju2faqt.apps.googleusercontent.com']);  // Specify the CLIENT_ID of the app that accesses the backend
        $payload = $client->verifyIdToken($credentials);        
        return response()->json([
            'Credentials' =>$payload],200);
    }
}
