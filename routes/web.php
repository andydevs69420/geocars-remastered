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

Route::get("/logout", function() {
    Auth::logout();
    return redirect()->intended("/login");
})->middleware(["auth", "verified"]);



/*
 |-----------+
 | app main  |
 |-----------+
 */
Route::controller(AppMainController::class)->group(function() {
    // index
    Route::get("/geocarsapp", "index");

    // operation: update|insert
    Route::post("/geocarsapp/{operation}/{info}", "action")
    ->whereIn("operation", ["insert", "update"])
    ->whereIn("info", ["car", "acc", "client"]);

    // operation: delete
    Route::delete("/geocarsapp/car/{carid}", "car")
    ->where("carid", "[0-9]+");
});


Route::get("test", function() {
    echo Auth::user()->userCompanyCar()->get();
});
