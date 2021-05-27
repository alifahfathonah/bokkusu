<?php

use Illuminate\Support\Facades\Route;

/* Home Route */
Route::get("/","HomeController@index");
/* end */

/* Auth & Dashboard Route */
Route::get("/auth/login","AuthController@login")->name("login");
Route::get("/auth/register","AuthController@register")->name('register');
Route::get("/auth/dashboard/logout","AuthController@logout")->name('logout');
Route::post("/auth/postlogin","AuthController@postlogin");
Route::post("/auth/postregister","AuthController@postregister");
Route::get("/dashboard","DashboardController@index");
/* end */

/*User Route Dashboard*/
Route::get("/dashboard/user","UserController@index");
Route::get("/dashboard/user/create","UserController@create");
Route::post("/dashboard/user/store","UserController@store");
Route::post("/dashboard/user/update","UserController@update");
Route::get("/dashboard/user/edit/{id}","UserController@edit");
Route::get("/dashboard/user/delete/{id}","UserController@destroy");
/* end */

/* Submission Route Dashboard */
Route::get("/dashboard/submission","SubmissionController@index");
Route::get("/dashboard/submission/create","SubmissionController@create");
Route::post("/dashboard/submission/store","SubmissionController@store");
/* end */

/* Documents Route Dashboard */

Route::get("/dashboard/documents","DocumentsController@index");
Route::get("/dashboard/documents/create","DocumentsController@create");
Route::post("/dashboard/documents/store","DocumentsController@store");

/* end */

/* Tracking Route Dashboard */

Route::get("/dashboard/tracking","TrackingController@index");
Route::get("/dashboard/tracking_result","TrackingController@result");

/* end */
