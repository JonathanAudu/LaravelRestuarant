<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function registerPage()
    {
        return view('register');
    }


    public function loginPage()
    {
        return view('login');
    }





    public function register(Request $request)
    {
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
        $user->password = Hash::make($request->password);
        $savedUser = $user->save();

        if ($savedUser) {
            return redirect('/loginPage')->with('success', 'Registration Successful Please login');
        } else {
            return back()->with('failed', ' Registration Failed');
        }
    }



    public function login(Request $request)
    {
        $request->validate([
            $email = $request->email,
            $password = $request->password,
        ]);
        $loggedUser = User::where('email', $request->email)->get();
        if (Auth::attempt(['email' => $email, 'password' => $password,  'user_role' => 1])) {
            $request->session()->regenerate();
            $request->session()->put('loginId', $loggedUser[0]->id);
            return redirect('/dashboard')->with('success', 'Welcome Admin');

        } elseif (Auth::attempt(['email' => $email, 'password' => $password, 'user_role' => 0])) {
            $request->session()->regenerate();
            $request->session()->put('loginId', $loggedUser[0]->id);
            return redirect('/');

        } else {

            return back()->withErrors([
                'email' => 'The provided details do not match our records.',
                // 'password' => 'Incorrect Password'
            ]);
        }
    }



    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
