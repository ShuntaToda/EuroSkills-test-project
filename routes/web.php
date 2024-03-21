<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\WorkspaceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(["middleware"=>["auth"]], function(){
    Route::get('/', [AdminController::class, "index"])->name("home");
    Route::group(["prefix" => "admin", "as" => "admin."], function(){
        Route::group(["as" => "workspace."], function(){
            Route::get("create", [WorkspaceController::class, "create"])->name("create");
            Route::post("create", [WorkspaceController::class, "store"])->name("create");
            Route::get("update/{id}", [WorkspaceController::class, "edit"])->name("update");
            Route::post("update/{id}", [WorkspaceController::class, "updete"])->name("update");
        });
        Route::group(["as" => "token."], function(){
            Route::get("token/{workspace_id}", [TokenController::class, "index"])->name("list");
            Route::get("token/{workspace_id}/create", [TokenController::class, "create"])->name("create");
            Route::post("token/{workspace_id}/create", [TokenController::class, "store"])->name("create");
        });

        Route::get("bills", function(){
            return view("bills");
        });
    });

});

Route::get("login", [LoginController::class, "index"])->name("login");
Route::post("login", [LoginController::class, "login"])->name("login");

