@extends('layout')
@section('content')
    @foreach ($aliens as $alien)
        {{$alien->name}} - {{$alien->email}} - {{$alien->location}}
        <hr>
    @endforeach
@endsection

@section('title')
    <h3>The Aliens are already here... and in the white house</h3>
@endsection