<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\demoApi;
use App\Http\Controllers\DeviceController;
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
Route::get("getData",[demoApi::class,'getData']);
Route::get("list",[DeviceController::class,'list']);
Route::get("find_list/{id?}",[DeviceController::class,'find_list']);
Route::post("addlist",[DeviceController::class,'addlist']);
Route::put("updatelist",[DeviceController::class,'updatelist']);
Route::get("search/{data}",[DeviceController::class,'search']);
Route::delete("delete/{data}",[DeviceController::class,'delete']);