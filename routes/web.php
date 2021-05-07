<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name("Homepage");

Route::get('/products', function () {
    
    $paste = config("pasta");

    $collection = collect($paste);

    $pastaLunga = $collection->where("tipo", "lunga");
    $pastaCorta = $collection->where("tipo", "corta");
    $pastaCortissima = $collection->where("tipo", "cortissima");

    $data = 
    [
        "formati" => [
            "lunga" => $pastaLunga,
            "corta" => $pastaCorta,
            "cortissima"=> $pastaCortissima
        ]
    ];

    return view('prodotti', $data);
})->name("Prodotti-Pasta");

Route::get('/news', function () {
    return view('news');
})->name("News");

Route::get('/dettaglio/{id}', function($id) {
    $paste = config("pasta");
    
    $data = [
        "dettaglioPasta" => $paste[$id],
        "id" => $id
    ];
    
    return view('details', $data);
})->name("Dettaglio-Prodotto");