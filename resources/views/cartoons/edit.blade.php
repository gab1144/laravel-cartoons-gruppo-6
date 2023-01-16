@extends('layout.main')

@section('content')
<form action="{{route('cartoons.update', $cartoon)}}" method="POST">
    @csrf
    @method('PUT')




@endsection
