@extends('template')

@section('title')
Home
@stop

@section('content')
    <ul>
        @foreach ($editoras as $editora)
            <li>{{$editora->nome}}</li>
        @endforeach
    </ul>
@stop
