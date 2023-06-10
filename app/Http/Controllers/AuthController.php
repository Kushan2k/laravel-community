<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule as ValidationRule;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //

    public function view_register(){
        return view('auth.register');


    }


    public function view_login(){
        return view('auth.login');
    }

    public function create_register(Request $request):RedirectResponse{

        $formdata = $request->validate([
            "name"  => "required|string",
            "email" => ['required',ValidationRule::unique('users','email')],
            "password"=>"required|min:6|confirmed"

        ]);

        $formdata['password'] = Hash::make($request->get("password"));

        try{

            User::create($formdata);

            return redirect("login");
            
        }catch(Exception $e){
            return redirect('register')->with("error", "Unexpected error accurd!");
        }

        // return redirect("login");
    }

    public function login_create(Request $request){

        $formdata = $request->validate([
            "email"    => "email|required",
            "password" => "required",
            
        ]);

        if(Auth::attempt($formdata,$request->get('remember'))){
            $user = Auth::user();
            return redirect("/");
            

            
        }
        return redirect("login")->with("error", "unexpected error happend!");

        
    }
}
