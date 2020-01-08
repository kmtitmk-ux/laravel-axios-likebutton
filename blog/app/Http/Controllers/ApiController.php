<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Resources\UserResource;

class ApiController extends Controller
{
    //
    public function user_show()
    {
        return UserResource::collection(User::all());
    }
}
