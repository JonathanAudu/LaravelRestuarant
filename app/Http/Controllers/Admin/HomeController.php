<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        return view('Admin.dashboard');
    }


    public function display()
    {
        $menus = Menu::all();
        return view('Admin.dashboard', compact('menus'));
    }


}


