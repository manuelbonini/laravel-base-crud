@extends('layouts.app')

@section('main_content')
    
    <section>
        <div class="container">
            <h1>Crea un nuovo fumetto</h1>

            <form action="{{ route('comics.store') }}" method="post">

                @csrf
                @method('POST')
            
                <div class="form-group">
                    <label for="title">Titolo</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old("title") }}" >
                </div> 

                <div class="form-group">
                    <label for="description">Descrizione</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control" ></textarea>
                </div> 

                <div class="form-group">
                    <label for="image">Immagine</label>
                    <input type="text" name="image" id="image" class="form-control" value="{{ old("image") }}"  >
                </div>

                <div class="form-group">
                    <label for="series">Serie</label>
                    <input type="text" name="series" id="series" class="form-control" value="{{ old("series") }}"  >
                </div>  

                <div class="form-group">
                    <label for="price">Prezzo</label>
                    <input type="text" name="price" id="price" class="form-control" >
                </div> 

                <input type="submit" class="btn btn-primary" value="Crea Fumetto">

            </form>
        </div>
    </section>

@endsection