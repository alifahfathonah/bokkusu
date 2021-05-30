<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;
use App\Models\Documents;

class DocumentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $data = DB::table("documents")->get();
     return view("dashboard.documents.index",["data" => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard.documents.create");
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
            "name" => "required|min:5",
            "doc" => "required|mimes:pdf,doc,docx"
        ]);

        $files = $request->file('doc')->store("file","public");

        // dd($files);

        DB::table('documents')->insert([
            "name" => $request->name,
            "doc" => $files,
            "status" => 2
        ]);

        return redirect("/dashboard/documents");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table("documents")->where("id",$id)->get();
        return view("dashboard.documents.review",["data" => $data]);
    }

    public function approved(Request $request)
    {
       DB::table("documents")->where("id",$request->id)->update(
           [
           "status" => 1
       ]);

       return redirect("/dashboard/documents");

    }

    public function disapproved(Request $request)
    {
       DB::table("documents")->where("id",$request->id)->update(
           [
           "status" => 3
       ]);

       return redirect("/dashboard/documents");

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
        DB::table("documents")->where("id",$id)->delete();
        return view("dashboard.documents");
    }
}
