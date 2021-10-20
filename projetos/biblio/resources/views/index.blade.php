@extends('template')

@section('title')
Home
@stop

@section('content')
    <ul>
        @foreach ($editoras as $editora)
            <li>{{$editora}}</li>
        @endforeach
    </ul>
@stop
