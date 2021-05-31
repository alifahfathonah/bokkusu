<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LegalizationController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table("pengesahan")->get();
        return view("dashboard.legalization.index",["data" => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function approved(Request $r)
    {
        DB::table("pengesahan")->where("id",$r->id)->update(
            [
            "status" => 1
        ]);
 
        return redirect("/dashboard/legalization");
    }

    public function revision(Request $r)
    {
        DB::table("pengesahan")->where("id",$r->id)->update(
            [
            "status" => 4
        ]);
 
        return redirect("/dashboard/legalization");
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table("pengesahan")->where("id",$id)->get();
        return view("dashboard.legalization.view",["data" => $data]);
    }

    public function report()
    {
        return view("dashboard.legalization.report");
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
    public function destroy($id)
    {
        //
    }
}
