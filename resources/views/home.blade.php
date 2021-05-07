@extends('layout\mainLay')

@section('titolo' , "Home")

@section('links')
<link rel="stylesheet" href="{{asset("css\homestyle.css")}}">
@endsection

@section('content')
    <div class="homeContainer">
        <img src="{{asset("img/molisana-home.jpg")}}" alt="">
    </div>
@endsection