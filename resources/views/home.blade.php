@extends('layouts.app')

@section('content')
@foreach ($trainList as $train)
    
@endforeach
    <h1>{{$train->departure_station}}</h1>
@endsection