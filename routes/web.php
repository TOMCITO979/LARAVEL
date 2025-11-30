<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {

    $response = Http::timeout(20)->get('https://pokeapi.co/api/v2/pokemon?limit=20');
    $lista = $response->json()['results'];

    $pokemones = [];

    foreach ($lista as $index => $pk) {

        $data = Http::timeout(20)->get($pk['url'])->json();

        $pokemones[] = [
            'num'  => $index + 1,
            'name' => ucfirst($data['name']),
            'img'  => $data['sprites']['other']['official-artwork']['front_default']
        ];
    }

    return view('welcome', compact('pokemones'));
});
