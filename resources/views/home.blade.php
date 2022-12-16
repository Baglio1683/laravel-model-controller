@extends('layouts.app')


@section('content')
    <h1>Hello I am the Home Page</h1>
    <section>
        <ul>
            @foreach ($movies as $movie)
                <li>
                    <img src="{{ $movie->image }}" alt="">
                    <h3>{{ $movie->title }}</h3>
                </li>
            @endforeach
        </ul>
    </section>
@endsection
