<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\DrinkController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ReservationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('Home');
// });
// Register Route
Route::get('registerpage', [AuthController::class, 'registerPage']);
Route::post('register', [AuthController::class, 'register']);

// Login Page
Route::get('loginPage', [AuthController::class, 'loginPage']);
Route::post('login', [AuthController::class, 'login']);

// logout
Route::get('/logout', [AuthController::class, 'logout']);
// Route::get('/dashboard', [UserController::class, 'dashboardUsers']);

// RESERVATION ROUTE
Route::post('/reservation', [UserController::class, 'reservation']);

// USER ROUTE
Route::get('/', [UserController::class, 'display']);


Route::middleware(['auth', 'isAdmin'])->group(function () {
    // USER ROUTE
    Route::get('/deleteuser/{id}', [UserController::class, 'destroy']);




    // HOME ROUTES
    Route::get('dashboard', [HomeController::class, 'display']);

    // MENU ROUTES
    Route::get('Menu', [MenuController::class, 'index']);
    Route::get('/addmenu', [MenuController::class, 'create']);
    Route::post('/addmenu', [MenuController::class, 'store']);
    Route::get('/editmenu/{id}', [MenuController::class, 'edit'])->name('editmenu');
    Route::post('/updatemenu/{id}', [MenuController::class, 'update']);
    Route::get('/menu/delete/{id}', [MenuController::class, 'destroy']);

    //USER ROUTE
    Route::get('/users', [UserController::class, 'show']);


    // DRINK ROUTE
    Route::get('/Drink', [DrinkController::class, 'index']);
    Route::get('/adddrink', [DrinkController::class, 'create']);
    Route::post('/adddrink', [DrinkController::class, 'store']);
    Route::get('/editdrink/{id}', [DrinkController::class, 'edit'])->name('editdrink');
    Route::post('/updatedrink/{id}', [DrinkController::class, 'update']);
    Route::get('/deletedrink/{id}', [DrinkController::class, 'destroy']);


    // CATEGORY ROUTE
    Route::get('Category', [CategoryController::class, 'index']);
    Route::get('/addcategory', [CategoryController::class, 'create']);
    Route::post('/addcategory', [CategoryController::class, 'store']);
    Route::get('/editcategory/{id}', [CategoryController::class, 'edit'])->name('editcategory');
    Route::post('/updatecategory', [CategoryController::class, 'update']);
<<<<<<< HEAD
    Route::get('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('deleteCategory');


    // RESERVATION ROUTE
    Route::get('Reservation', [ReservationController::class, 'index']);
=======
    Route::get('category/delete/{id}', [CategoryController::class, 'destroy'])->name('deleteCategory');
>>>>>>> 64a3c3d28694c5d913c598c7de478f42facc0c2f
});
