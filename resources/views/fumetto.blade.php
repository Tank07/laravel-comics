@extends('layout.layout')

@section('title', 'Fumetto')

@section('content')
    
    <div >
        <img src=" {{ $fumettoDio['thumb'] }} " alt="">
        <h2>{{ $fumettoDio['title'] }}</h2>
        <p>{{ $fumettoDio['price'] }}</p>
        <p>{{ $fumettoDio['description'] }} </p>
        {{-- <p> Art by: {{ $fumettoDio['artists'] }} </p>
        <p> Written by: {{ $fumettoDio['writers'] }} </p> --}}
    </div>

@endsection
