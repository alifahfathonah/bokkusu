@extends('dashboard.templates.master')

@section('title','Create Submission')

@section('content')

<h1>Create Submission - Bokkusu</h1>

<br>

<div class="card">
    <div class="card-body">
        <form action="/dashboard/submission/store" class="form" method="POST" enctype="multipart/form-data">
            @csrf

            <h2>Detail Mitra Kerjasama:</h2>

            <div class="form-group mb-3">
            <label for="Mitra" class="label">
            Nama Mitra:
            </label>
            <input type="text" class="form-control" name="mitra">
            </div>
            <br>
            <div class="form-group mb-3">
            <label for="Institusi Mitra" class="label">
            Institusi Mitra:
            </label>
            <input type="text" class="form-control" name="institusi_mitra">
            </div>
            <br>
            <div class="form-group mb-3">
            <label for="Jabatan Mitra" class="label">
            Jabatan Mitra dalam Instansi:
            </label>
            <input type="text" class="form-control" name="jabatan_mitra">
            </div>
            <br>
            <div class="form-group mb-3">
            <label for="Jenis Instansi" class="label">
            Jenis Instansi:
            </label>
            <input type="text" class="form-control" name="jenis_instansi">
            </div>
            <br>

            <hr>

            <h2>Detail Informasi Kerjasama:</h2>

            <div class="form-group mb-3">
            <label class="label" for="jenis dokumen">
                Jenis Dokumen:
            </label>
            <br>
            <select class="form-select" type="select" name="jenis_dokumen">
            <option selected disabled>--CHOOSE DOCUMENT--</option>
            @if(Auth::user()->role == 1)
            <option value="PROPOSAL">PROPOSAL</option>
            <option value="MOU">MOU</option>
            @else
            <option value="PROPOSAL">PROPOSAL</option>
            <option value="MOA dan MOU">MOA & MOU</option>
            <option value="MOA">MOA</option>
            <option value="MOU">MOU</option>
            <option value="LEGAL">LEGAL</option>
            @endif
            </select>
            </div>
            <div class="form-group mb-3">
            <label class="label" for="perihal">
                Perihal:
            </label>
            <textarea class="form-control" name="perihal" cols="30" rows="10">{{old('perihal')}}</textarea>
            @error('perihal')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <div class="form-group mb-3">
            <label class="label" for="durasi">
                Durasi:
            </label>
                <input name="durasi" type="number" class="form-control" value="{{old('durasi')}}">
            @error('durasi')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <div class="form-group mb-3">
            <label class="label" for="Unit">
                Unit
            </label>
                <input name="unit" type="text" class="form-control" value="{{Auth::user()->name}}">
            @error('unit')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <div class="form-group mb-3">
            <label class="label" for="deskripsi">
                Deskripsi:
            </label>
            <textarea class="form-control" name="deskripsi" cols="30" rows="10">{{old('deskripsi')}}</textarea>
            @error('deskripsi')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <div class="form-group mb-3">
            <label for="implementasi">
               Rencana Implementasi
            </label>
            <textarea class="form-control" name="implementasi" cols="30" rows="10">{{old('implementasi')}}</textarea>
            @error('implementasi')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <div class="form-group mb-3">
            <label class="label" for="implementasi">
               Dokumen
            </label>
           <input type="file" class="form-control" name="file">
            @error('file')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <br>
            <input class="btn btn-success" type="submit" name="add" value="SUBMIT">
            &nbsp;&nbsp;
            <a href="/dashboard/submission" class="btn btn-danger">
            CANCEL
            </a>
            &nbsp;&nbsp;
            <input type="reset" class="btn btn-warning" value="RESET" />
        </form>
    </div>
</div>

@section('script')
<script src="../../js/scripts.js"></script>
<script>
    $('.dropdown-toggle').dropdown();
</script>
@endsection


@endsection