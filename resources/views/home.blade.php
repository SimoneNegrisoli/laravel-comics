@extends('layouts.app')


@section('title', 'Home')

@section('content')
    <main>
        <section class=" container ">
            <h1>Comics</h1>
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-12 col-md-2">
                        <div class=" thecard">
                            <div class="mycard-c">
                                <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
                            </div>
                            <div class="card-body mt-2 ">
                                <h5 class="card-title">{{ $comic['title'] }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </section>
    </main>
@endsection
