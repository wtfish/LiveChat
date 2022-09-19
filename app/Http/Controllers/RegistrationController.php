<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function store(Request $req){
        $validated=$req->validate([
            "name"=>"required|max:255",
            "username_register"=>"required|unique:users,username",
            "password_register"=>"required|min:7"
        ]);
        // return dd($validated);
        if($validated){
            User::create([
                "name"=>$validated["name"],
                "username"=>$validated["username_register"],
                "password"=>Hash::make($validated["password_register"])
            ]);
            return redirect("login")->with(["register_success"=>"Register Succes! Please Login"]);
        }
        // return 
    }
}
