<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
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
        $menus = Menu::all();
        return view('Admin.menu', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.addmenu');
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
            'menu_item' => 'required|max:100',
            'item_description' => 'required|max:255',
            'menu_image' => 'mimes:jpg,bmp,png|nullable',
            'price' => 'required|integer',
        ]);

        if ($request->menu_image) {
            $file_name = 'menu_img-' . time() . '.' . $request->menu_image->extension();
            $request->menu_image->move(public_path('/uploads/menu_images/'), $file_name);

            $addMenu = new Menu;
            $addMenu->menu_item = $request->menu_item;
            $addMenu->item_description = $request->item_description;
            $addMenu->menu_image = $file_name;
            $addMenu->price = $request->price;
            $savedMenu = $addMenu->save();

            if ($savedMenu) {

                return redirect()->action(
                    [MenuController::class, 'index']
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
