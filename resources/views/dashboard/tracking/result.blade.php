@extends('dashboard.templates.master')

@section('title','Tracking Result')

@section('content')

<h1>Tracking Result - Bokkusu</h1>

<div class="card">
    <div class="card-body">
        <b>RESULT TRACKING SEARCH</b>
        <br>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Aspernatur quaerat deserunt aut accusamus dolorem libero a dolor 
            consectetur soluta, 
            similique minus aliquam sit minima maiores. Facilis sequi 
            quasi ipsam aperiam?
        </p>
    </div>
</div>

<br>

<!--jquery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>

@section('script')
<script src="../../js/scripts.js"></script>
<script>
    $('.dropdown-toggle').dropdown();
</script>
@endsection

@endsection