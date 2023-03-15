{{-- @php
dd($animals);

@endphp --}}

@extends('layoutadmin')
@section('content')
    @foreach ($animals as $animal)
        {{$animal}}<hr>
    @endforeach

    @foreach ($foods as $food)
        {{$food}}<hr>
    @endforeach

    @foreach ($breeds as $key => $breed)
        {{$key}} => {{$breed}}
    @endforeach
@endsection

@section('title')
    <h3>The Animals are already here... and in the zoo</h3>
@endsection
