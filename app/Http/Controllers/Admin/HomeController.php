<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Drink;

class HomeController extends Controller
{
    public function index(){
        return view('Admin.dashboard');
    }


    public function display()
    {
        $drinks = Drink::all();
        $users = User::all();
        $menus = Menu::all();
        return view('Admin.dashboard',compact('users','menus', 'drinks'));
    }


}


