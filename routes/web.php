<?php
use App\Genero;
use App\Serie;

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
    return view('welcome');
});

Route::get('/generos', function () {
    $generos = Genero::all();

    foreach($generos as $genero){
        echo $genero->id . " - ";
        echo $genero->nome . "<br/>";
    }
});

Route::get('/series', function () {
    $series = Serie::all();

    foreach($series as $serie){
        echo $serie->id . " - ";
        echo $serie->nome . " - ";
        echo $serie->genero_id . "<br/>";
        echo $serie->sinopse . "<br/><br/>";
    }
});
