@extends('layout.layout')

@section('title', 'fumetti')

@section('content')
    <div >
            @foreach ( $comics as $key => $comic )
            <a href=" {{ route( 'fumetto', [ 'id' => $key ] ) }} ">
                <div >
                    <img src=" {{ $comic['thumb'] }} " alt="">
                    <h4>
                        {{ $comic['title'] }}
                    </h4>
                </div>
            @endforeach
        </div>
@endsection
