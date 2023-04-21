@extends('main')

@section('content')
    <h1>Ufo Sightings</h1>
    <p>Here are the latest UFO sightings</p>
   
        @if (@isset($name))
          {{$name}}, you submission has been received.
        @endif
    
    <form action="/ufo" method="post">
        @csrf
        <input type="text"  class="form-control"name="name" required>
        <input type="text" class="form-control" name="message">
        <input type="submit" class="form-control" value="Send">
    </form>
@endsection