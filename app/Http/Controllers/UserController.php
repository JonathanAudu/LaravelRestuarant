<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(){
        $users = User::all();
        return view('Admin.users', compact('users'));
    }


    public function dashboardUsers(){
        $users = User::all();
        return view('Admin.dashboard', compact('users'));
    }
}


