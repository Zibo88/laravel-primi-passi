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


Per prima cosa, creiamo un nuovo progetto Laravel 7, utilizzando questo comando:
composer create-project --prefer-dist laravel/laravel:^7.0 laravel-primi-passi
Al termine dell'installazione, entriamo nella cartella del progetto
cd laravel-primi-passi
e avviamo l'artisan serve con uno di questi due comandi:
php artisan serve
oppure se il precedente comando non funziona:
php -S localhost:8000 -t public
A questo punto, iniziamo a prendere confidenza con le rotte e le views: cancelliamo la view welcome.blade.php e creiamo una nostra homepage. Facciamo quindi sì che la rotta / visualizzi home.blade.php
Inizialmente stampiamo un Hello World, poi passiamo dei dati alla view in modo da visualizzarli dinamicamente con Blade.
Bonus:
Creiamo più di una pagina e visualizziamo un header menu con i link di tutte le pagine, utilizzando la funzione route()
*/

// Quando l'utente va su /home
Route::get('/home', function () {
    
    // creo la struttura dati da passare alla home
    $data = [
        
        'name' => 'jaguar',
        'model' => 'x-type',
        'year' => '2005',
        'dealerships' => ['Milano', 'Roma' , 'Napoli' , 'Palermo']
        
    ];
    // collegati al file di views che ha nome 'home'
                // aggiungo come prametro la variabile da cui estrapolare i dati
    return view('home', $data);
    // dando un nome alla route è possibile sfruttarlo come collegamento tra le pagine
})->name('home');

Route::get('/friends', function () {

    $data = [

        'class' => '3C',
        'school' => 'G. Orwell',
        'city' => 'Girona',
        'myFriends' => ['anna', 'carla', 'marco' , 'giovanni']
    ];
    return view('friends', $data);
        // dando un nome alla route è possibile sfruttarlo come collegamento tra le pagine
})->name('friends');

Route::get('/enemy', function () {

    $data = [

        'myEnemy' => ['luca', 'andrea', 'pippo', 'pluto']   
    ];
    return view('enemy', $data);
})->name('enemy');









