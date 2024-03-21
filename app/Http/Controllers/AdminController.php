<?php

namespace App\Http\Controllers;

use App\Models\Workspace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        $workspaces = Workspace::where("user_id", Auth::user()->id)->get();
        return view("home",compact("workspaces"));
    }
}
