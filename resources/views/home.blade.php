@extends('layouts.app')


@section('title', 'Home')

@section('content')
    <main>
        <section class=" container ">
            <h1>Comics</h1>
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="thecard my-5 card  ">
                            <div class="mycard-c">
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            </div>
                            <div class="mycard my-1 ">
                                <div class="card-title">
                                    <h3>{{ $comic['title'] }}</h3>
                                </div>
                                <div class="mycard-b">
                                    {{ $comic['description'] }}
                                    <div class="d-flex justify-content-between ">
                                        <div>
                                            {{ $comic['series'] }}
                                        </div>
                                        <div>
                                            {{ $comic['price'] }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </section>
    </main>
@endsection
