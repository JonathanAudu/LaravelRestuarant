<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use App\Models\User;
use App\Models\Drink;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        return view('Admin.dashboard');
    }


    public function display()
    {
        $categorys = Category::all();
        $drinks = Drink::all();
        $users = User::all();
        $menus = Menu::all();
        return view('Admin.dashboard',compact('users','menus', 'drinks', 'categorys'));
    }

    public function countDisplay(){
        $categories = Category::count();
        $drinks = Drink::count();
        $menus = Menu::count();
        $users = User::where('user_role', '0')->count();

       return view('Admin.dashboard', compact('categories','users','menus', 'drinks'));
    }

}


