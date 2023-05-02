<?php

namespace App\Http\Controllers\Api;

use Tymon\JWTAuth\Contracts\JWTSubject;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller implements JWTSubject
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users  =  User::all();

        return response()->json($users);
    }

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
