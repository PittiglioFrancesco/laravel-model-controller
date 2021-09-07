@extends('layout.app')
@section('title', 'pagina comics')

@section('content')
    <h1>Questa è la pagina dei comics</h1>   

    <div class="container">
        <div class="card-container">
            @foreach($fumetti as $key => $fumetto)
            <div class="card">
                <img src="{{ $fumetto['thumb'] }}" alt="{{ $fumetto['title'] }}">
                <div class="layover"><a href="{{ route('pagina-comic', ['id' => $key])}}"> {{ $fumetto['title'] }} </a></div>
            </div>
            @endforeach
        </div>
    </div>

@endsection