<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSessionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function store(CreateSessionRequest $request){

        $attributes = [
            'email' => $request['email'],
            'password' => $request['password']
        ];

        if(!Auth::attempt($attributes, true)){
            throw ValidationException::withMessages([
                'email' => 'Your provided email could not be verified',
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
