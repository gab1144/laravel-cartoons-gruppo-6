@extends('layout.main')

@section('content')
<form action="{{route('cartoons.store')}}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" name="title" id="title" value="{{old('title')}}" placeholder="Insert title..">
    </div>

    <div class="mb-3">
      <label for="year" class="form-label">Year</label>
      <input type="number" class="form-control" name="year" id="year" value="{{old('year')}}" placeholder="Insert year..">
    </div>

    <div class="mb-3">
        <label for="creator" class="form-label">Creator</label>
        <input type="text" class="form-control" name="creator" id="creator" value="{{old('creator')}}" placeholder="Insert creators..">
      </div>

    <div class="mb-3">
        <label for="rating" class="form-label">Rating</label>
        <input type="text" class="form-control" name="rating" id="rating" value="{{old('rating')}}" placeholder="Insert rating..">
    </div>

    <div class="mb-3">
        <label for="genre" class="form-label">Genre</label>
        <input type="text" class="form-control" name="genre" id="genre" value="{{old('genre')}}" placeholder="Insert genre..">
    </div>

    <div class="mb-3">
        <label for="runtime_in_minutes" class="form-label">Minutes</label>
        <input type="number" class="form-control" name="runtime_in_minutes" id="runtime_in_minutes" value="{{old('runtime_in_minutes')}}" placeholder="Insert minutes..">
    </div>

    <div class="mb-3">
        <label for="episodes" class="form-label">Episodes</label>
        <input type="text" class="form-control" name="episodes" id="episodes" value="{{old('episodes')}}" placeholder="Episodes..">
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="text" class="form-control" name="image" id="image" value="{{old('image')}}" placeholder="Image URL">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
