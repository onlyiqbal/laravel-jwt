<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\LogoutController;
use App\Http\Controllers\Api\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post("/register", RegisterController::class)->name("register");

Route::post("/login", LoginController::class)->name("login");

Route::middleware('auth:api')->get("/user", function (Request $request) {
    return $request->user();
});


Route::post("/logout", LogoutController::class)->name("logout");
