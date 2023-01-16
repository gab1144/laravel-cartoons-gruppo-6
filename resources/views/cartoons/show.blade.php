@extends('layout.main')

@section('content')
    <main>
        <div class="container">
            <h1>{{$cartoon->title}}</h1>
            <img class="detail-img" src="{{$cartoon->image}}" alt="{{$cartoon->title}}">
            <div>Anno: <strong>{{$cartoon->year}}</strong></div>
            <div>Creatore: <strong>{{$cartoon->year}}</strong></div>
            <div>Rating: <strong>{{$cartoon->rating}}</strong></div>
            <div>Genere: <strong>{{$cartoon->genre}}</strong></div>
            <div>Durata: <strong>{{$cartoon->runtime_in_minutes}}</strong></div>
            <div>Numero di episodi: <strong>{{$cartoon->episodes}}</strong></div>
            <a class="btn bg-white" href="{{route('cartoons.index')}}">Torna alla Home</a>
        </div>
    </main>
@endsection
