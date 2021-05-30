<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Models\Submission;

class SubmissionController extends Controller
{

/*
Detail Mitra kerjasama

nama mitra
jabatan mitra dalam instansi
instansi mitra kerjasama
jenis Instansi

Detail indormasi kerjasama

jenis dokumen kerjasama
perihal kerjasama
lama kegiatan kerjasama
unit pelaksanaan kerjasama
deskripsi kerjasama
rencana implementasi kerjasama
dokumen kerjasama (proposal/surat penawaran) drop at here

rgba 086499

*/

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
        // Join Table

        // $submission = DB::table("kerjasama")
        // ->join("documents","kerjasama.id","=","documents.kerjasama_id")
        //  ->select("kerjasama.*","documents.*")->get();

        $data = DB::table("kerjasama")->get(); 
        return view("dashboard.submission.index",["submission" => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard.submission.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $r->validate([
            "jenis_dokumen" => "required",
            "perihal" => "required",
            "durasi" => "required",
            "unit" => "required",
            "deskripsi" => "required",
            "implementasi" => "required"
        ]);
        
        // $doc = DB::table("documents")->get();

        /* $submission = DB::table("kerjasama")
         ->join("documents","kerjasama.id_doc","=","documents.id")
         ->select("")->get(); */

        $file = $r->file("file")->store("file","public");

        DB::table("kerjasama")->insert([
            // "id_doc" => $doc[1]->kerjasama_id,
            "jenis_dokumen" => $r->jenis_dokumen,
            "perihal" => $r->perihal,
            "durasi" => $r->durasi,
            "unit_pelaksana" => $r->unit,
            "deskripsi" => $r->deskripsi,
            "status" => 2,
            "files" => $file,
            "rencana_implementasi" => $r->implementasi
        ]);

        return redirect("/dashboard/submission");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table("kerjasama")->where("id",$id)->get();
        return view("dashboard.submission.review",["data" => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table("kerjasama")->where("id",$id)->get();
        return view("dashboard.submission.edit",["data" => $data]);
    }

    public function approved(Request $request)
    {
       DB::table("kerjasama")->where("id",$request->id)->update(
           [
           "status" => 1
       ]);

       return redirect("/dashboard/submission");

    }

    public function disapproved(Request $request)
    {
       DB::table("kerjasama")->where("id",$request->id)->update(
           [
           "status" => 3
       ]);

       return redirect("/dashboard/submission");

    }

    public function revision(Request $request)
    {
       DB::table("kerjasama")->where("id",$request->id)->update(
           [
           "status" => 4
       ]);

       return redirect("/dashboard/submission");

    }

    public function report(Request $r)
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
    public function update(Request $r)
    {
        $r->validate([
            "jenis_dokumen" => "required",
            "perihal" => "required",
            "durasi" => "required",
            "unit" => "required",
            "deskripsi" => "required",
            "implementasi" => "required"
        ]);


        DB::table("kerjasama")->where("id",$r->id)->update([
            "jenis_dokumen" => $r->jenis_dokumen,
            "perihal" => $r->perihal,
            "durasi" => $r->durasi,
            "unit_pelaksana" => $r->unit,
            "deskripsi" => $r->deskripsi,
            "rencana_implementasi" => $r->implementasi,
            "status" => $r->status
        ]);

        return redirect("/dashboard/submission");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("kerjasama")->where("id",$id)->delete();
        return redirect("/dashboard/submission");
    }
}
