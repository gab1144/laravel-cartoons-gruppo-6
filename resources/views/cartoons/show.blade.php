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
            <div class="mt-3">
                <a class="btn btn-warning" href="{{route('cartoons.edit', $cartoon)}}">Modifica elemento</a>
                <a class="btn bg-white" href="{{route('cartoons.index')}}">Torna alla Home</a>
                <form onsubmit="return confirm('Confermi l\'eliminazione di: {{ $cartoon->title }}')"
                    action="{{ route('cartoons.destroy', $cartoon) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Cancella elemento</button>
                </form>
            </div>

        </div>
    </main>
@endsection
