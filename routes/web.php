<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
    // return view('users');
});

// Route::get('users', [UserController::class, "viewLoad"]);

// Route::get('/users/{name}', function ($name) {
//     return view('users',["name"=>$name]);
// });

// Route::view("users", "users");

// Route::get("user/{id}",[UserController::class,"show"]);
// Route::get("user", "UserController@show");  //this was used till php 7 and no more follows in php 8

// Route::get("users", function(){
//     return view("users");
// });
// Route::get("about", function(){
//     return view("about");
// });

Route::post("users",[UserController::class, "getData"]);
// Route::view("login","users");

Route::view("home","home");
Route::view("noaccess","noaccess");

Route::group(["middleware" => ["protectPage"]], function(){
    Route::view("users","users");
});