<?php

namespace App\Http\Controllers\Admin;

use App\Models\Drink;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DrinkController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'isAdmin']);
    }


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
        $categories = Category::all();
        return view('Admin.adddrink', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $categories = Category::findorfail($request->category_id);
        if ($request->drink_image) {
         $file_name = 'drink_img-' . time() . '.' . $request->drink_image->extension();
         $request->drink_image->move(public_path('/uploads/drink_images/'), $file_name);

        $categories->Drink()->create([
         'drink_name' => $request->drink_name,
         'drink_description' => $request->drink_description,
         'drink_image' => $file_name,
         'drink_price' => $request->drink_price,

        ]);

        return redirect('/Drink')->with('message', 'drink created');
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
    public function edit(Drink $drinks, $id)
    {
        $categories = Category::all();
        $drinks = Drink::findorfail($id);
        return view('Admin.adddrink', compact('categories', 'drinks'));
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
        $id = $request->id;
        $drink = Drink::find($id);
        $drink->drink_name = $request->drink_name;
        $drink->category_id = $request->category_id;
        $drink->drink_description = $request->drink_description;
        $drink->drink_image = $request->drink_image;
        $drink->drink_price = $request->drink_price;
        $drink->save();
        return redirect('/Drink')->with('message', 'drink Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Drink $drink, $id)
    {
        $drink = Drink::find($id);
        $drink->delete();
        return redirect('/Drink')->with('message', 'ddrink deleted');
    }
}
