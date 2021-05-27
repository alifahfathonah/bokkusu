<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class AuthController extends Controller
{
    /* ACCOUNT
    u : tribudi123@gmail.com , p : tri123 (Unit Pelaksana)
    u : awebsite84@gmail.com , p : admin123 (Unit Pengelola)
    u : .... , p : .... (Unit Legal)
    u : .... , p : .... (Pimpinan)
    */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view("auth.register");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postregister(Request $request)
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
            "password" => Hash::make($request->password),
            "role" => 1]);

        return redirect("/auth/login");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view("auth.login");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postlogin(Request $request)
    {
        $request->validate([
            "email" => "required",
            "password" => "required",  
            ]);
    
        if(!Auth::attempt(["email" => $request->email,"password" => $request->password]))
        {
            return redirect("/auth/login");
        }else{
            return redirect("/dashboard");
        }
            
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect("/auth/login");
    }
}
