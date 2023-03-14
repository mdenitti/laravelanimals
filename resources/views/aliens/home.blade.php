@foreach ($aliens as $alien)
    {{$alien->name}} - {{$alien->email}} - {{$alien->location}}
    <hr>
@endforeach