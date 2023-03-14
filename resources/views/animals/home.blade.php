{{-- @php
dd($animals);

@endphp --}}

@foreach ($animals as $animal)
    {{$animal}}<hr>
@endforeach

@foreach ($foods as $food)
    {{$food}}<hr>
@endforeach

@foreach ($breeds as $key => $breed)
    {{$key}} => {{$breed}}
@endforeach
