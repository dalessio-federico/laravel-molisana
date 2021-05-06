@extends('layout\mainLay')

@section('titolo' , "Home")

@section('cssfile', "css/homestyle.css")

@section('content')
    <div class="homeContainer">
        <img src="{{asset("img/molisana-home.jpg")}}" alt="">
    </div>
@endsection