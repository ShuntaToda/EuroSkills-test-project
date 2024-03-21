<?php

namespace App\Http\Controllers;

use App\Models\ApiToken;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TokenController extends Controller
{
    public function index($workspace_id){
        $tokens = ApiToken::where("workspace_id", $workspace_id)->get();
        return view("token-list", compact("tokens", "workspace_id"));
    }
    
    public function create($workspace_id){
        return view("token-create", compact("workspace_id"));
    }
    
    public function store($workspace_id, Request $request){
        $token = ApiToken::create([
            "name" => $request->name,
            "token" => Str::random(40),
            "workspace_id" => $workspace_id
        ]);
        return view("token-create-complete", compact("token", "workspace_id"));
    }
}
