<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view("login");
    }
    public function login(Request $req){
        $check = $req->only("name", "password");
        if(Auth::attempt($check)){
            session()->regenerate();
            return redirect()->route("home");
        }
        return redirect()->route("login")->with(["message" => "wrong name or password"]);
    }
}
