@extends('layouts.app')


@section('content')
    <div class="container py-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($comics as $index => $comic)
                <div class="col">
                    <a href="{{ route('comics', ['id' => $index]) }}">
                        <div class="card border-0">
                            <img class="card-img-top" src="{{ $comic['thumb'] }}"
                                alt="image describing comics{{ $comic['title'] }}">
                            <div class="card-body">
                                {{ $comic['title'] }}
                            </div>
                        </div>
                    </a>

                </div>
            @endforeach
        </div>
    </div>
@endsection
