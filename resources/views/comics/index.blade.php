@extends('layouts.app')

@section('main_content')
    <section>
        <div class="container">

            <h1>Fumetti</h1>

            <div class="row">
                
                @foreach ($comics as $comic)
                    
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ $comic->image }}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">{{ $comic->title }}</h5>

                          @if ($comic->description)
                          <p class="card-text">{{ $comic->description }}</p>
                          @endif
                          
                            <a href="{{ route('comics.show',[
                                    'comic' => $comic->id
                                ]) }}" class="btn btn-primary">
                                Mostra dettagli
                            </a>

                            <a href="{{ route('comics.edit',[
                                    'comic' => $comic->id
                                ]) }}" class="btn btn-secondary">
                                Modifica fumetto
                            </a>
                        </div>
                      </div>
                </div>

                @endforeach

            </div>

        </div>
    </section>
@endsection