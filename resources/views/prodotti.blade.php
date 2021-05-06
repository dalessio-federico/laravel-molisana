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
                <p>{{$pasta["titolo"]}}</p>
            </div>
        </div>
        @endforeach
    </div>
@endsection