<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Item;

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
    return view('welcome')->with("posts",Post::all());
})->name('home');

Route::get("/post/{id}", function ($id) {
    return view("post", [
        "post" => Post::find($id)
    ]);

});

Route::get("/store", [StoreController::class, 'index'])->name("store");
Route::get("/store/{id}", [StoreController::class, 'view']);
Route::get('/login', [AuthController::class, 'view_login'])->name("login");
Route::get('/register', [AuthController::class, 'view_register'])->name("register");
Route::post("/register", [AuthController::class, 'create_register'])->name('register.create');
Route::post("/login", [AuthController::class, "login_create"])->name("login.create");
Route::post("/logout", [AuthController::class, 'logout'])->name("logout");
