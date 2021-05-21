<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = DB::table('users')->get();
        return view("dashboard.user.index",["user" => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard.user.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|min:3|max:60",
            "email" => "required",
            "sex" => "required",
            "institution" => "required|min:10",
            "username" => "required|min:5|max:10",
            "password" => "required|min:5|max:60"]);

        DB::table("users")->insert([
            "name" => $request->name,
            "email" => $request->email,
            "sex" => $request->sex,
            "institution" => $request->institution,
            "username" => $request->username,
            "password" => Hash::make($request->password)]);

        return redirect("/dashboard/user");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user_data = DB::table("users")->where("id",$request->id)->get();
        return view("dashboard.user.detail",["user" => $user_data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('users')->where("id",$id)->get();
        return view("dashboard.user.edit",['user' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            "name" => "required|min:3|max:60",
            "email" => "required",
            "sex" => "required",
            "institution" => "required|min:20",
            "username" => "required|min:5|max:20"]);

        DB::table("users")->where("id",$request->id)->update([
            "name" => $request->name,
            "email" => $request->email,
            "sex" => $request->sex,
            "institution" => $request->institution,
            "username" => $request->username]);

        return redirect("/dashboard/user");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("users")->where("id",$id)->delete();
        return redirect("/dashboard/user");
    }
}
