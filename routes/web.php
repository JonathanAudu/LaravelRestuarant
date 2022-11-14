<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MenuController;

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

Route::get('/', function () {
    return view('Home');
});
// Register Route
Route::get('/registerpage', [AuthController::class, 'registerPage']);
Route::post('/register', [AuthController::class, 'register']);

// Login Page
Route::get('/loginPage', [AuthController::class, 'loginPage']);
Route::post('/login', [AuthController::class, 'login']);

// logout
Route::get('/logout',[AuthController::class, 'logout']);



Route::middleware(['auth', 'isAdmin'])->group(function(){

    Route::get('/dashboard', [HomeController::class, 'index']);


    Route::get('/Menu', [MenuController::class, 'index']);
    Route::get('/addmenu', [MenuController::class, 'create']);
    Route::post('/addmenu', [MenuController::class, 'store']);

});




