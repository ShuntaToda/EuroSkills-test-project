<?php

namespace App\Http\Controllers;

use App\Models\Workspace;
use Illuminate\Http\Request;

class WorkspaceController extends Controller
{
    public function create(){
        return view("workspace-create");
    }
    public function store(Request $request){
        Workspace::create([
            "title" => $request->title,
            "description" => $request->description,
            "user_id"=> $request->user()->id,
            "amount" => $request->amount == null ? null : $request->amount ,
        ]);
        return redirect()->route("admin.workspace.create")->with(["message" => "conpleted"]);
    }
    public function edit($id){
        $workspace = Workspace::find($id);
        return view("workspace-edit", compact("workspace"));
    }
    public function updete(Request $request, $id){
        $workspace = Workspace::find($id);
        $workspace->update([
            "title" => $request->title,
            "description" => $request->description,
            "amount" => $request->amount == null ? null : $request->amount ,
        ]);
        return redirect()->route("admin.workspace.update", $id)->with(["message" => "conpleted"]);
    }
}
