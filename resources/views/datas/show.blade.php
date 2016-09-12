@extends('layout.app')

@section('container')
    <h1>{{$data->title}}</h1>

    <article>
        {{$data->body}}
    </article>

@endsection