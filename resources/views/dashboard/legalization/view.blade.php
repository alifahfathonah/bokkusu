<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Review Legalization - Bokkusu</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container">

<h1>Review Legalization - Bokkusu</h1>

@foreach($data as $dt)
<div class="card">
    <div class="card-header">
    <span>
    @if($dt->status == 1)
                Disetujui
                @elseif($dt->status == 2)
                Proses Review
                @elseif($dt->status == 4)
                Perlu Revisi
                @endif
    </span>
    <h1>
    {{$dt->name}}
    </h1>
    </div>
    <div class="card-body">
    <h2>Proposal Document:</h2>
    <br>
    <iframe src="{{ url('../../file/'.$dt->proposal) }}" frameborder="0" width="500" height="500"></iframe>
    

    <h2>Legal Document:</h2>
    <br>
    <iframe src="{{ url('../../file/'.$dt->doc) }}" frameborder="0" width="500" height="500"></iframe>
    
    <h2>MOA Document:</h2>
    <br>
    <iframe src="{{ url('../../file/'.$dt->moa) }}" frameborder="0" width="500" height="500"></iframe>
    
    <h2>MOU Document:</h2>
    <br>
    <iframe src="{{ url('../../file/'.$dt->mou) }}" frameborder="0" width="500" height="500"></iframe>
    </div>

<form action="/dashboard/legalization/approve" method="POST">
@csrf
<input type="hidden" name="id" value="{{$dt->id}}">
<input type="submit" class="btn btn-sm btn-success" value="Setujui">
</form>

&nbsp;&nbsp;
<form action="/dashboard/legalization/revision" method="POST">
@csrf
<input type="hidden" name="id" value="{{$dt->id}}">
<input type="submit" class="btn btn-sm btn-warning" value="Revisi">
</form>

&nbsp;&nbsp;
<a href="/dashboard/legalization" class="btn btn-warning">
    Kembali
</a>
&nbsp;&nbsp;
</div>
@endforeach

</div>

</body>
</html>