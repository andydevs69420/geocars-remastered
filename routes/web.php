<?php

use Illuminate\Support\Facades\Route;

// custom controller
use App\Http\Controllers\AppMainController;
use App\Http\Controllers\LocalVariantSelectorController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes(["verify" => true]);

// variant injector
Route::get("/variant/{variant?}", [LocalVariantSelectorController::class, "pick_variant"])->where(["variant" => "light|dark"]);


Auth::routes();

// app main
Route::controller(AppMainController::class)->group(function() {
    // index
    Route::get("/geocarsapp", "index");

    // operation: update|insert
    Route::post("/geocarsapp/{operation}/{info}", "operation")
    ->whereIn("operation", ["insert", "update"])
    ->whereIn("info", ["account", "car"]);

    // operation: delete
    Route::delete("/geocarsapp/car/{carid}")
    ->where("carid", "[0-9]+");
});
