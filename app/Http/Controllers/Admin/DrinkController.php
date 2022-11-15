<?php

namespace App\Http\Controllers\Admin;

use App\Models\Drink;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drinks = Drink::all();
        return view('Admin.drinks', compact('drinks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.adddrink');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'drink_name' => 'required|max:100',
            'drink_description' => 'required|max:255',
            'drink_image' => 'mimes:jpg,bmp,png|nullable',
            'drink_price' => 'required|integer',
        ]);

        if ($request->drink_image) {
            $file_name = 'drink_img-' . time() . '.' . $request->drink_image->extension();
            $request->drink_image->move(public_path('/uploads/drink_images/'), $file_name);

            $addDrink = new Drink;
            $addDrink->drink_name = $request->drink_name;
            $addDrink->drink_description = $request->drink_description;
            $addDrink->drink_image = $file_name;
            $addDrink->drink_price = $request->drink_price;
            $savedDrink = $addDrink->save();

            if ($savedDrink) {

                return redirect()->action(
                    [DrinkController::class, 'index']
                );
            } else {
                return back()->with('failed', 'Something went Wrong!! Try again');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
