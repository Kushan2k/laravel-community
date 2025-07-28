<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    //

    public function index(){
        return view("store")->with("items",Item::all());
    }

    public function view($id){
        $item = Item::find($id);
        if($item){
            return view("item")->with("item",$item);
        }
        echo "hello";
        return redirect("store");
        
    }
}
