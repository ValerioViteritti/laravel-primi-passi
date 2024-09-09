<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {

    $consegna = 'A questo punto, iniziamo a prendere confidenza con le rotte e le views: cancelliamo la view welcome.blade.php e creiamo una nostra homepage. Facciamo quindi sì che la rotta / visualizzi home.blade.php
        Inizialmente stampiamo un Hello World, poi passiamo dei dati alla view in modo da visualizzarli dinamicamente con Blade.
        Alla view fra i dati che passate ci deve essere almeno un array che viene ciclato in pagina
        Il file blade deve anche contenere almeno una espressione condizionale
        Bonus:
        Creiamo più di una pagina e visualizziamo un header menu con i link di tutte le pagine, utilizzando la funzione route()
        Buon Laravel!';
    $helloWorld = 'Hello World!';
    $pilotiFormula1 = [
        'Leclerc',
        'Hamilton',
        'Verstappen',
        'Norris',
        'Piastri',
        'Bearman',
        'Bottas',
        'Ricciardo',
        'Russel',
        'Tsunoda',
        'Alonso',
        'Perez',
        'Antonelli'
    ];
    $stampa_piloti = true;


    return view('home', compact('consegna', 'helloWorld', 'pilotiFormula1', 'stampa_piloti'));

})->name('home');

Route::get('/about', function (){

    $prova = 'Sei in about';
    $testo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil quidem et asperiores quos recusandae odit exercitationem reprehenderit. Optio recusandae quam sequi nam ad distinctio similique, maxime ipsa, vel, beatae qui.';

    return view('about', compact('prova', 'testo'));

})->name('about');
