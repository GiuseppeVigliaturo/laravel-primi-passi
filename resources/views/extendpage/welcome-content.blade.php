@extends('layouts.base-layouts')

@section ('content')
 @foreach ($database as $value)
    <div class='cd'>
                <img src={{$value['poster']}} />
    <h3>{{$value['title']}}</h3>
    <small>{{$value['author']}}</small>
    <strong>{{$value['year']}}</strong>
                 
     </div>
 @endforeach
@endsection