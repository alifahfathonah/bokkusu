<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;
use app\Models\Documents;
use app\Models\Pengesahan;

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

        $files = $request->file('doc')->store("file");
        $proposal = $request->file('proposal')->store('file');
        $mou = $request->file('mou')->store("file");
        $moa = $request->file('moa')->store("file");

        // dd($files);

        DB::table('documents')->insert([
            "name" => $request->name,
            "proposal" => $proposal,
            "doc" => $files,
            "mou" => $mou,
            "moa" => $moa,
            "status" => 2
        ]);

        DB::table('pengesahan')->insert([
            "name" => $request->name,
            "proposal" => $proposal,
            "doc" => $files,
            "mou" => $mou,
            "moa" => $moa,
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

    public function revision(Request $request)
    {
       DB::table("documents")->where("id",$request->id)->update(
           [
           "status" => 4
       ]);

       return redirect("/dashboard/documents");

    }

    public function report($id)
    {
        $docs = Documents::findOrFail($id);

        if(!empty($docs))
        {
            $newrecords = $docs->replicate();
            $newrecords->setTable("pengesahan");
            $newrecords->save();
            return redirect("/dashboard/documents");
        }else{
            return redirect("/dashboard/documents");
        }

        // $oldrecords = Documents::query()->where("id",$id)->each(function ($oldrecords)
        // {
        //     $newrecords = $oldrecords->replicate();
        //     $newrecords->setTable("pengesahan");
        //     $newrecords->save();
        // });

        // find post with given ID 
        // $docs = Documents::findOrFail($id); 
        // get all Post attributes 
        // $data = $docs->attributesToArray(); 
        // remove name and price attributes 
        // $data = array_except($data, ['name', 'price']); 
        // create new Order based on Post's data 
        // $pengesahan = Pengesahan::create($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $documents = DB::table("documents")->where("id",$id)->get();
        return view("dashboard.documents.edit",["documents" => $documents]);
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
            "name" => "required|min:5",
        ]);

        $files = $request->file('doc')->store("file");
        $proposal = $request->file('proposal')->store('file');
        $mou = $request->file('mou')->store("file");
        $moa = $request->file('moa')->store("file");

        // dd($files);

        DB::table('documents')->where("id",$request->id)->update([
            "name" => $request->name,
            "proposal" => $proposal,
            "doc" => $files,
            "mou" => $mou,
            "moa" => $moa,
            "status" => $request->status
        ]);

        DB::table('pengesahan')->where("id",$request->id)->update([
            "name" => $request->name,
            "proposal" => $proposal,
            "doc" => $files,
            "mou" => $mou,
            "moa" => $moa,
            "status" => $request->status
        ]);

        return redirect("/dashboard/documents");

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
        return view("dashboard.documents.index");
    }
}
