@extends('main')
@section('content')
    <h1>Ufo Sightings</h1>
    <p>Here are the latest UFO sightings</p>
   
        @if (@isset($name))
          {{$name}}, you submission has been received.
        @endif
    
    <form action="/ufo" method="post">
        @csrf
        Name
        <input type="text"  class="form-control"name="name" required>
        Email
        <input type="text" class="form-control" name="email">
        Location
        <input type="text" class="form-control" name="location">
        Message
        <input type="text" class="form-control" name="message">
        Scary?
        <input type="checkbox" name="scary">
        <input type="submit" class="form-control" value="Send">

    </form>
@endsection