<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

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
        $categories = Category::all();
        return view('Admin.addmenu', compact('categories'));
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
       if ($request->menu_image) {
        $file_name = 'menu_img-' . time() . '.' . $request->menu_image->extension();
        $request->menu_image->move(public_path('/uploads/menu_images/'), $file_name);

       $categories->Menu()->create([
        'menu_item' => $request->menu_item,
        'item_description' => $request->item_description,
        'menu_image' => $file_name,
        'price' => $request->price,

       ]);

       return redirect('Menu')->with('message', '');
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
    public function edit(Menu $menu, $id)
    {
        $categories = Category::all();
        $menus = Menu::findorfail($id);
        return view('Admin.editmenu', compact('categories', 'menus'));
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
        $menu = Menu::find($id);
        $menu->menu_item = $request->menu_item;
        $menu->category_id = $request->category_id;
        $menu->item_description = $request->item_description;
        $menu->menu_image = $request->menu_image;
        $menu->price = $request->price;
        $menu->save();
        return redirect()->action(

            [MenuController::class, 'index']
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu, $id)
    {
        $menu = Menu::find($id);
        $menu->delete();

        return redirect('Menu')->with('denger', 'Deleted');
    }
}
