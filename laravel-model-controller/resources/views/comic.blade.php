@extends('layout.app')
@section ('title', 'pagina-comic')

@section('content')

    <div>
        <h2>{{ $fumetto['title'] }}</h2>
        <img src="{{ $fumetto['thumb'] }}" alt="{{ $fumetto['title'] }}">
        <p>{{ $fumetto['description'] }}</p>
    </div>

@endsection