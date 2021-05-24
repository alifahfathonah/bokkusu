<?php

use Illuminate\Support\Facades\Route;

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
});
Route::get("/auth/login","AuthController@login")->name("login");
Route::post("/auth/postlogin","AuthController@postlogin");
Route::get("/dashboard","DashboardController@index");
Route::get("/dashboard/user","UserController@index");
Route::get("/dashboard/user/create","UserController@create");
Route::post("/dashboard/user/store","UserController@store");
Route::post("/dashboard/user/update","UserController@update");
Route::get("/dashboard/user/edit/{id}","UserController@edit");
Route::get("/dashboard/user/delete/{id}","UserController@destroy");
Route::get("/auth/dashboard/logout","AuthController@logout");