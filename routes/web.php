<?php


use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post("users",[UserController::class,"getUsers"]);
Route::view('users','users');




