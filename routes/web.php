<?php

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
});

Route::get("/post/{id}", function ($id) {
    return view("post", [
        "post" => Post::find($id)
    ]);

});

Route::get("/store", [StoreController::class, 'index'])->name("store");
Route::get("/store/{id}", [StoreController::class, 'view']);
