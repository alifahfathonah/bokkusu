<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table("pengajuan")->get();
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

        DB::table("pengajuan")->insert([
            "jenis_dokumen" => $r->jenis_dokumen,
            "perihal" => $r->perihal,
            "durasi" => $r->durasi,
            "unit_pelaksana" => $r->unit,
            "deskripsi" => $r->deskripsi,
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
        //
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
    public function update(Request $request)
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
        DB::table("pengajuan")->where("id",$id)->delete();
        return redirect("/dashboard/submission");
    }
}
