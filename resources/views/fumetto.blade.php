@extends('layout.layout')

@section('title', 'Fumetto')

@section('content')
    
    <div >
        <img src=" {{ $fumettoUno['thumb'] }} " alt="">
        <h2>{{ $fumettoUno['title'] }}</h2>
        <p>{{ $fumettoUno['price'] }}</p>
        <p>{{ $fumettoUno['description'] }} </p>
        @foreach ( $fumettoUno as $fumetto )
        {{-- <p> Art by: {{ $fumettoUno['artists'] }} </p>
        <p> Written by: {{ $fumettoUno['writers'] }} </p> --}}
    </div>

@endsection
