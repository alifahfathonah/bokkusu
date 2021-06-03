<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Edit Submission - Sikers</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<br>

<div class="container">

<h1>
Edit Submission
</h1>

<div class="card">
@foreach($data as $dt)
    <div class="card-body">
        <form action="/dashboard/submission/update" class="form" method="POST">
        @csrf
            <input class="form-control" type="hidden" name="id" value="{{$dt->id}}">
            
            <h2>Detail Mitra Kerjasama:</h2>

            <div class="form-group mb-3">
            <label for="Mitra" class="label">
            Nama Mitra:
            </label>
            <input type="text" class="form-control" name="mitra" value="{{$dt->mitra}}">
            @error('mitra')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <br>
            <div class="form-group mb-3">
            <label for="Institusi Mitra" class="label">
            Institusi Mitra:
            </label>
            <input type="text" class="form-control" name="institusi_mitra" value="{{$dt->institusi_mitra}}">
            @error('institusi_mitra')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <br>
            <div class="form-group mb-3">
            <label for="Jabatan Mitra" class="label">
            Jabatan Mitra dalam Instansi:
            </label>
            <input type="text" class="form-control" name="jabatan_mitra" value="{{$dt->jabatan_mitra}}">
            @error('jabatan_mitra')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <br>
            <div class="form-group mb-3">
            <label for="Jenis Instansi" class="label">
            Jenis Instansi:
            </label>
            <input type="text" class="form-control" name="jenis_instansi" value="{{$dt->jenis_instansi}}">
            @error('jenis_instansi')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <br>

            <hr>

            <h2>Detail Informasi Kerjasama:</h2>

            <div class="form-group">
            <label for="perihal">
                Perihal
            </label>
            <textarea class="form-control" name="perihal" cols="30" rows="10">{{$dt->perihal}}</textarea>
            @error('perihal')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <div class="form-group">
            <label for="jenis dokumen">
                Jenis Dokumen:
            </label>
            <br>
            <select type="form-select" name="jenis_dokumen">
            <option selected disabled>--CHOOSE DOCUMENT--</option>
            @if(Auth::user()->role == 1)
            <option value="PROPOSAL">PROPOSAL</option>
            @else
            <option value="MOA">MOA</option>
            <option value="MOU">MOU</option>
            @endif
            </select>
            </div>
            <div class="form-group">
            <label for="durasi">
                Durasi
            </label>
                <input name="durasi" type="number" class="form-control" value="{{$dt->durasi}}">
            @error('durasi')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <div class="form-group">
            <label for="Unit">
                Unit
            </label>
                <input name="unit" type="text" class="form-control" value="{{$dt->unit_pelaksana}}">
            @error('unit')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <div class="form-group">
            <label for="deskripsi">
                Deskripsi
            </label>
            <textarea class="form-control" name="deskripsi" cols="30" rows="10">{{$dt->deskripsi}}</textarea>
            @error('deskripsi')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <div class="form-group">
            <label for="implementasi">
               Rencana Implementasi
            </label>
            <textarea class="form-control" name="implementasi" cols="30" rows="10">{{$dt->rencana_implementasi}}</textarea>
            @error('implementasi')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <div class="form-group">
            <label for="implementasi">
               Status
            </label>
            <input type="number" name="status" class="form-control" value="{{$dt->status}}">
            @error('status')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <br>
            <input type="file" name="file" class="form-control" value="{{$dt->files}}">
            @error('status')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <br>
            <input class="btn btn-success" type="submit" name="update" value="UPDATE">
            &nbsp;&nbsp;
            <a href="/dashboard/submission" class="btn btn-danger">
            CANCEL
            </a>
        </form>
    </div>
@endforeach
</div>

</div>

</body>
</html>