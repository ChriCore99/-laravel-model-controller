@extends('layouts.app')

@section('content')

    <div>
        <ul class="d-flex flex-wrap row-gap-3 column-gap-3" >
            @foreach($movies as $movie)
                <li class="col-2 border border-primary">
                    <p>{{ $movie->title }}</p>
                    <p>{{ $movie->original_title }}</p>
                    <p>{{ $movie->nationality }}</p>
                    <p>{{ $movie->date }}</p>
                    <p>{{ $movie->vote }}</p>
                </li>
            @endforeach
        </ul>
    </div>

@endsection