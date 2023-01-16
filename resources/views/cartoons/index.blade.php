@extends('layout.main')

@section('content')

<div class="container d-grid ">
<div class="row">

    @foreach ($cartoons as $cartoon )
<div class="col-4">

    <div class="card mb-3" style="width: 18rem;">
        <img src="{{$cartoon->image}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$cartoon->title}}</h5>
          <p class="card-text">{{$cartoon->genre}}</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    @endforeach
</div>
</div>


@endsection
