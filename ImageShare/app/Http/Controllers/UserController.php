<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;

class UserController extends Controller
{
    public function create(CreateUserRequest $request){

        $newImageName = time() . '-' . $request['username'] . '.' . $request->file('avatar')->extension();
    
        $request->file('avatar')->move(public_path('images'), $newImageName);
        
        $user =  User::create([
            'lastname' => $request['lastname'],
            'firstname' => $request['firstname'],
            'username' => $request['username'],
            'avatar' => $newImageName,
            'email' => $request['email'],
            'password' => bcrypt('password')
        ]);

        auth()->login($user);
        
        return redirect('/feed');

    }

    public function show(String $id){

        return view('Users.show', ['user' => User::find($id)]);
    }
}
