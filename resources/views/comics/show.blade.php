@extends('layouts.app')
@section('title', 'Fumetto')



@section('content')
    <main>
        <section class="container">
            <h1>Comics</h1>
            <div class="row gy-4">

                <div class="col-12">
                    <div class="card">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="card-img-top">
                        {{-- <div class="card-body">
                            <h5 class="card-title">{{ $comic['titolo'] }}</h5>
                            <p class="card-text">{!! $comic['descrizione'] !!}</p>
                            <p>
                                Peso: {{ $comic['peso'] }} | Cottura: {{ $comic['cottura'] }} | Tipo:
                                {{ $comic['tipo'] }}
                            </p>
                        </div> --}}
                    </div>
                </div>


            </div>

        </section>

    </main>


@endsection
