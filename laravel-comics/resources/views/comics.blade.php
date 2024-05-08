@extends('layouts.app')


@section('content')
    <div class="container py-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($comics as $comic)
                <div class="col">
                    <div class="card border-0">
                        <img class="card-img-top" src="{{ $comic['thumb'] }}" alt="image describing comics{{ $comic['title'] }}">
                        <div class="card-body">
                            {{$comic['title']}}
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
@endsection
