<?php

use Illuminate\Support\Facades\Route;

// custom controller
use App\Http\Controllers\ctrl_LoginController;
use App\Http\Controllers\ctrl_RegisterController;
use App\Http\Controllers\ctrl_AppMainController;
use App\Http\Controllers\LocalVariantSelectorController;

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

// welcome
Route::get('/', function () {
    return view('welcome');
});

// variant injector
Route::get("/variant/{variant?}", [LocalVariantSelectorController::class, "pick_variant"])->where(["variant" => "light|dark"]);

// login
Route::controller(ctrl_LoginController::class)->group(function() {
    // index
    Route::get("/login", "login_page");
});

// register
Route::controller(ctrl_RegisterController::class)->group(function() {
    // index
    Route::get("/register", "register_page");
});

// app main
Route::controller(ctrl_AppMainController::class)->group(function() {
    // index
    Route::get("/geocarsapp", "geocars_main");
});
