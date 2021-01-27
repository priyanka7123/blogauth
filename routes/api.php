<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api;
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

Route::get("/post/list", [Api::class, "post_list"]);
Route::delete("/post/{id}", [Api::class, "delete"]);
Route::post("/post/", [Api::class, "create_post"]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
