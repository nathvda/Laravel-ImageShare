<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;

class UserController extends Controller
{
    public function create(CreateUserRequest $request){
        dd($request->file('avatar'));
    }
}
