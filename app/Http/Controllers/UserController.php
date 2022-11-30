<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use App\Models\Drink;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function show(){
        $users = User::all();
        return view('Admin.users', compact('users'));
    }

    public function destroy(User $users, $id)
    {
        $users = User::find($id);
        $users->delete();

        return redirect('users')->with('denger', 'User Deleted');
    }


    public function reservation(Request $request){
        $request->validate([
            'name' => 'string',
            'email' => 'string',
            'phone_number' => 'string',
            'date' => 'string',
            'time' => 'string',
            'guest' => 'integer',
            'message' => 'string'
        ]);

        $reservation = new Reservation();
        $reservation->name = $request->name;
        $reservation->email = $request->email;
        $reservation->phone_number = $request->phone_number;
        $reservation->date = $request->date;
        $reservation->time = $request->time;
        $reservation->guest = $request->guest;
        $reservation->message = $request->message;
        $reservation->save();

        if ($reservation->save()) {
            return redirect('/')->with('success', 'Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!');
        } else {
            return back()->with('failed', ' Registration Failed');
        }

    }


    public function display()
    {
        $drinks = Drink::all();
        $menus = Menu::all();
        return view('Home',compact('menus', 'drinks'));
    }

}


