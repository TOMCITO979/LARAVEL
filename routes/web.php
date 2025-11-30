<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {

    // Aumentamos el tiempo de espera de la petición principal
    $response = Http::timeout(20)->get('https://pokeapi.co/api/v2/pokemon?limit=20');
    $lista = $response->json()['results'];

    $pokemones = [];

    foreach ($lista as $index => $pk) {

        // Agregamos timeout a cada petición individual
        $data = Http::timeout(20)->get($pk['url'])->json();

        $pokemones[] = [
            'num'  => $index + 1,
            'name' => ucfirst($data['name']),
            'img'  => $data['sprites']['other']['official-artwork']['front_default']
        ];
    }

    return view('welcome', compact('pokemones'));
});
