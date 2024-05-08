@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 g-3">
            <div class="col">
                <img src="{{ $comic['thumb'] }}"alt="">
                <div class="card border-0">
                    <div class="card-body">

                        <h2 class="card-title">
                            Titolo : {{ $comic['title'] }}
                        </h2>
                        <p class="card-text">

                        <section style="font-size: x-large ">Description :</section> {{ $comic['description'] }}
                        </p>

                    </div>
                    <div class="card-footer">
                        <p>
                            Prezzo :
                        <nav style="color: red">
                            {{ $comic['price'] }} </nav>
                        </p>
                        <p>
                           Type : {{ $comic['type'] }}

                        </p>
                    </div>
                </div>



            </div>
            <h1>

            </h1>





        </div>

    </div>
@endsection
