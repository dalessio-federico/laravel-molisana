@extends('layout\mainLay')

@section('links')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
<link rel="stylesheet" href="{{asset("css\prodottistyle.css")}}">
@endsection

@section('titolo' , "Prodotti")

@section('content')
    <div class="containerProdotti">
        @foreach ($formati as $tipo => $formato)
        <h1>{{$tipo}}</h1>
        <div class="cardcontainer flexRowCenter">
            @foreach ($formato as $key => $pasta)
            <div class="card">
                <img src="{{$pasta["src"]}}" alt="immagine prodotto">
                <div class="productInfo flexColumnCenter">
                    <h3><a href="{{route('Dettaglio-Prodotto', ['id' => $key])}}">{{$pasta["titolo"]}}</a></h3>
                    <div class="tecnicalInfo flexRowSpaceAround">
                        <p><span>Tipo</span>{{$pasta["tipo"]}}</p>
                        <p><span><i class="fab fa-hotjar"></i></span>{{$pasta["cottura"]}}</p>
                        <p><span><i class="fas fa-weight"></i></span>{{$pasta["peso"]}}</p>
                    </div>
                </div>
            </div>
            @endforeach    
        </div>
        @endforeach
    </div>
@endsection