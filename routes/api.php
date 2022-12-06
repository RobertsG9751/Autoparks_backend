<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\krasas_controller;
use App\Http\Controllers\markas_controller;
use App\Http\Controllers\model_controller;
use App\Http\Controllers\city_controller;
use App\Http\Controllers\type_controller;
use App\Http\Controllers\street_controller;
use App\Http\Controllers\holder_controller;
use App\Http\Controllers\auto_controller;
use App\Http\Controllers\motor_controller;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/krasas", [krasas_controller::class, "index"]);
Route::get("/markas", [markas_controller::class, "index"]);
Route::get("/models", [model_controller::class, "index"]);
Route::get("/models/{id}", [model_controller::class, "show"]);
Route::get("/pilsetas", [city_controller::class, "index"]);
Route::get("/pilsetas/{id}", [city_controller::class, "show"]);
Route::get("/tipi", [type_controller::class, "index"]);
Route::post("/iela", [street_controller::class, "store"]);
Route::post("/turetajs", [holder_controller::class, "store"]);
Route::post("/auto", [auto_controller::class, "store"]);
Route::post("/motors", [motor_controller::class, "store"]);
Route::get("/auto", [auto_controller::class, "index"]);