<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function registerPage(){
        return view('register');
    }


    public function loginPage(){
        return view('login');
    }





    public function register(Request $request){
        $request->validate([
            'username' => 'required|string',
            'email' => 'required|unique:users|email',
            'phone_number' => 'required|unique:users|digits:11',
            'password' => 'required|string|min:4'
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->password = Hash::make($request ->password);
        $savedUser = $user->save();

        if($savedUser){
            return redirect('/loginPage')->with('message', 'Registration Successful Please login');
        }else{
            return back()->with('failed', ' Registration Failed');
        }
    }



    public function login(Request $request){

    }
}
