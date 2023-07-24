@extends('layouts.app')

@section('title', 'Welcome')

@section('main-content')
    <h1>
        Movies!
    </h1>

    @foreach($movies as $movie)
        <h3>
            {{ $movie->title }}
        </h3>
        <p>
            {{ $movie->nationality }}
        </p>
        <p>
            {{ $movie->date }}
        </p>
    @endforeach

@endsection