@extends('layout\mainLay')

@section('titolo' , $dettaglioPasta["titolo"])

@section('links')
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("css\details.css")}}">    
@endsection

@section('content')
    <div class="detailsContainer">
        <div class="topsection">
            <img src="{{$dettaglioPasta["src-h"]}}" alt="{{$dettaglioPasta["titolo"]}}">
        </div>
        <div class="centralSection container">
            <p> {!! $dettaglioPasta["descrizione"] !!}</p>
        </div>
        <div class="bottomSection">
            <img src="{{$dettaglioPasta["src-p"]}}" alt="">
        </div>
    </div>
@endsection