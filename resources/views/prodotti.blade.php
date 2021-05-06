@extends('layout\mainLay')

@section('cssfile', "css\prodottistyle.css")

@section('titolo' , "Prodotti")

@dump($paste)

@section('content')
    <div class="cardcontainer flexRowCenter">
        @foreach ($paste as $pasta)
        <div class="card">
            <img src="{{$pasta["src"]}}" alt="immagine prodotto">
            <div class="productInfo">
                <h3>{{$pasta["titolo"]}}</h3>
                <div class="tecnicalInfo flexRowSpacearound">
                    <p><span>Tipo</span>{{$pasta["tipo"]}}</p>
                    <p><span><i class="fab fa-hotjar"></i></span>{{$pasta["cottura"]}}</p>
                    <p><span><i class="fas fa-weight"></i></span>{{$pasta["peso"]}}</p>
                </div>
                <p>{{$pasta["descrizione"]}}</p>
            </div>
        </div>
        @endforeach
    </div>
@endsection