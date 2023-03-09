<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginUserRequest;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create(LoginUserRequest $request){

        $attributes = [
            'username' => $request['username'],
            'password' => $request['password']
        ];

        if(!Auth::attempt($attributes, true)){
            throw ValidationException::withMessages([
                'username' => 'Your provided username could not be verified',
                'password' => 'Wrong password']
            );
        }

        session()->regenerate();
        session()->flash('success', 'Welcome back, how have you been?');

        return redirect ('/feed');        
    }

        public function destroy(){
            auth()->logout();

            return redirect('/');
        }
}
