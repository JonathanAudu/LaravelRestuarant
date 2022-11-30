<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use App\Models\User;
use App\Models\Drink;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $drinks = Drink::all();
        $users = User::all();
        $menus = Menu::all();
        $categorys = Category::all();
        return view('Admin.categories', compact('users','menus', 'drinks', 'categorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $drinks = Drink::all();
        $users = User::all();
        $menus = Menu::all();
        $categorys = Category::all();
        return view('Admin.addcategory', compact('users','menus', 'drinks', 'categorys'));
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
            'category_name' => 'required'
        ]);

        $addcattegory = new Category;
        $addcattegory->category_name = $request->category_name;
        $addcattegory->save();

        return redirect('Category')->with('message', 'Category Added');

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
    public function edit(Category $category, $id)
    {
        $drinks = Drink::all();
        $users = User::all();
        $menus = Menu::all();
        $categorys = Category::all();
        $category = Category::find($id);
        return view('Admin.editcategory', compact('category', 'users','menus', 'drinks', 'categorys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $addcattegory = Category::find($id);
        $addcattegory->category_name = $request->category_name;
        $addcattegory->save();

        return redirect()->action(
            [CategoryController::class, 'index']
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $categorys, $id)
    {
        $categorys = Category::find($id);
        $categorys->delete();

        return view('Admin.categories')->with('message', ' Deleted successful');
    }
}
