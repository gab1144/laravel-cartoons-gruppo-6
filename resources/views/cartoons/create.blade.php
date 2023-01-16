@extends('layout.main')

@section('content')
<div class="container my-5">
    <h1>Aggiungi un nuovo cartoon</h1>
    <form action="{{route('cartoons.store')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{old('title')}}" placeholder="Insert title..">
          @error('title')
            <div class="invalid-feedback">
                {{$message}}
             </div>
            @enderror
        </div>

        <div class="mb-3">
          <label for="year" class="form-label">Year</label>
          <input type="number" class="form-control @error('year') is-invalid @enderror" name="year" id="year" value="{{old('year')}}" placeholder="Insert year..">
          @error('year')
          <div class="invalid-feedback">
              {{$message}}
           </div>
          @enderror
        </div>

        <div class="mb-3">
            <label for="creator" class="form-label">Creator</label>
            <input type="text" class="form-control @error('creator') is-invalid @enderror" name="creator" id="creator" value="{{old('creator')}}" placeholder="Insert creators..">
            @error('creator')
            <div class="invalid-feedback">
                {{$message}}
             </div>
            @enderror
          </div>

        <div class="mb-3">
            <label for="rating" class="form-label">Rating</label>
            <input type="text" class="form-control" name="rating" id="rating" value="{{old('rating')}}" placeholder="Insert rating..">
        </div>

        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" class="form-control @error('genre') is-invalid @enderror" name="genre" id="genre" value="{{old('genre')}}" placeholder="Insert genre..">
            @error('genre')
            <div class="invalid-feedback">
                {{$message}}
             </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="runtime_in_minutes" class="form-label">Minutes</label>
            <input type="number" class="form-control" name="runtime_in_minutes" id="runtime_in_minutes" value="{{old('runtime_in_minutes')}}" placeholder="Insert minutes..">
        </div>

        <div class="mb-3">
            <label for="episodes" class="form-label">Episodes</label>
            <input type="text" class="form-control @error('episodes') is-invalid @enderror" name="episodes" id="episodes" value="{{old('episodes')}}" placeholder="Episodes..">
            @error('title')
            <div class="invalid-feedback">
                {{$message}}
             </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" class="form-control @error('image') is-invalid @enderror" name="image" id="image" value="{{old('image')}}" placeholder="Image URL">
            @error('image')
            <div class="invalid-feedback">
                {{$message}}
             </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Aggiungi all'elenco</button>
    </form>
</div>

@endsection
