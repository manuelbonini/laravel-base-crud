@extends('layouts.app')

@section('main_content')
    
    <section>
        <div class="container">
            <h1>Dettagli fumetto: {{ $comic->title }}</h1>

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ $comic->image }}" alt="{{ $comic->title }}">
                <div class="card-body">

                    @if ($comic->full_description == NULL)
                        @if ($comic->description)
                        <p class="card-text">{{ $comic->description }}</p>
                        @endif
                    @endif

                    <p class="card-text">Serie: {{ $comic->series }}</p>

                    <p class="card-text">Prezzo: {{ $comic->price }}</p>

                </div>
              </div>
        </div>
    </section>

@endsection