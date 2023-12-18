@extends('layouts.app')


@section('title', 'Home')

@section('content')
    <main>
        <section class=" container ">
            <h1>Comics</h1>
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="card thecard">
                            <div class="mycard-c">
                                <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
                            </div>
                            <div class="card-body d-flex  flex-column  justify-content-between ">
                                <h5 class="card-title">{{ $comic['title'] }}</h5>

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
                @endforeach
            </div>

        </section>
    </main>
@endsection
