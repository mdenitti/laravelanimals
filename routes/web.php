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
    return view('welcome');
});

/* Route::get('/animals', function () {
    $animals = ['dog', 'cat', 'bird', 'fish'];
    $foods = ['meat', 'fish', 'seeds', 'worms'];
    return view('animals.home', [
        'animals' => $animals,
        'foods' => $foods
    ]);
}); */

Route::get('/animals', function () {
    $animals = ['dog', 'cat', 'bird', 'fish'];
    $foods = ['meat', 'fish', 'seeds', 'worms'];
    $breeds = ['dog' => 'labrador', 'cat' => 'persian', 'bird' => 'canary', 'fish' => 'goldfish'];
    return view('animals.home', compact('animals', 'foods', 'breeds'));
});

/* Opdracht: Geef een assiocatieve array mee aan de view. Gebruik de compact functie. Gebruik de view animals.home.
en itereer over de array in de view. */