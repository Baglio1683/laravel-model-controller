@extends('layouts.app')


@section('content')
    <h1>Lista dei film</h1>
    <section>
        <div class="container">
            <div class="row justify-content-between">
                @foreach ($movies as $movie)
                    <div class="card col-4 mb-5 pt-2" style="width: 18rem;">
                        <img src="{{ $movie->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Titolo: {{ $movie->title }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection


{{-- <li>
                    <img src="{{ $movie->image }}" alt="">
                    <h3>{{ $movie->title }}</h3>
                </li> --}}
