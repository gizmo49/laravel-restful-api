<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller{


    protected function registered(Request $request, $user){
        
        $user->generateToken();
        return response()->json(['data' => $user->toArray()], 201);
    
    }

    public function register(Request $request){
            // all fields required
            $this->validator($request->all())->validate();

            event(new Registered($user = $this->create($request->all())));

          
            $this->guard()->login($user);
            return $this->registered($request, $user)
                            ?: redirect($this->redirectPath());
    
    
    }


}   

