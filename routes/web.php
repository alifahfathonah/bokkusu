<?php

use Illuminate\Support\Facades\Route;

/* Home Route */
Route::get("/","HomeController@index");
Route::get("/news","HomeController@news");
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
Route::get("/dashboard/submission/review/{id}","SubmissionController@show");
Route::post("/dashboard/submission/update","SubmissionController@update");
Route::get("/dashboard/submission/delete/{id}","SubmissionController@destroy");
Route::get("/dashboard/submission/edit/{id}","SubmissionController@edit");
Route::post("/dashboard/submission/approve","SubmissionController@approved");
Route::post("/dashboard/submission/disapprove","SubmissionController@disapproved");
Route::post("/dashboard/submission/revision","SubmissionController@revision");

/* end */

/* Documents Route Dashboard */

Route::get("/dashboard/documents","DocumentsController@index");
Route::get("/dashboard/documents/create","DocumentsController@create");
Route::post("/dashboard/documents/store","DocumentsController@store");
Route::get("/dashboard/documents/delete/{id}","DocumentsController@destroy");
Route::get("/dashboard/documents/edit/{id}","DocumentsController@edit");
Route::post("/dashboard/documents/update","DocumentsController@update");
Route::get("/dashboard/documents/review/{id}","DocumentsController@show");
Route::post("/dashboard/documents/approve","DocumentsController@approved");
Route::post("/dashboard/documents/disapprove","DocumentsController@disapproved");
Route::post("/dashboard/documents/revision","DocumentsController@revision");
// Route::get("/dashboard/documents/handover/{id}","DocumentsController@report");

/* end */

/* Tracking Route Dashboard */

Route::get("/dashboard/tracking","TrackingController@index");
Route::get("/dashboard/tracking_result","TrackingController@result");
Route::get("/dashboard/tracking/search","TrackingController@search");

/* end */

/* Legalization Route Dashboard */

Route::get("/dashboard/legalization","LegalizationController@index");
Route::post("/dashboard/legalization/approve","LegalizationController@approved");
Route::post("/dashboard/legalization/revision","LegalizationController@revision");
Route::get("/dashboard/legalization/view/{id}","LegalizationController@show");
Route::get("/dashboard/legalization/report","LegalizationController@report");

/* end */

/* News Route Dashboard */

Route::get("/dashboard/news","NewsController@index");
Route::get("/dashboard/news/create","NewsController@create");
Route::post("/dashboard/news/store","NewsController@store");
Route::get("/dashboard/news/delete/{id}","NewsController@destroy");

/* end */