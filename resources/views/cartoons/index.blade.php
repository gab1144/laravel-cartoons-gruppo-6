@extends('layout.main')

@section('content')
    <div class="container d-grid ">
        <div class="row">

            @if (session('deleted'))
                <div class="alert alert-success" role="alert">
                    {{ session('deleted') }}
                </div>
            @endif

            @foreach ($cartoons as $cartoon)
                <div class="col-4">

                    <div class="card mb-3" style="width: 18rem;">
                        <img src="{{ $cartoon->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $cartoon->title }}</h5>
                            <p class="card-text">{{ $cartoon->genre }}</p>
                            <a href="{{route('cartoons.show', $cartoon)}}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{route('cartoons.edit', $cartoon)}}" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>

                           @include('partials.form-delete')
                        </div>
                    </div>
                </div>
            @endforeach
            {{$cartoons->links()}}
        </div>
    </div>
@endsection
