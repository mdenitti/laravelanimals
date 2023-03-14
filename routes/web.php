<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UfoController;

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

route::get('/animals/{id}',function($id){
    // encrypt the id
    $id = decrypt($id);
    return "my id is $id";
});

Route::get('/animaldetail/{name}',[AnimalController::class, 'show']);

// OLD METHOD! Route::get('/users', UsersController@show);
Route::get('/user/{id}', [UsersController::class, 'show']);

Route::get('/aliens',[UfoController::class, 'show']);
Route::get('/aliens/{id}',[UfoController::class, 'showAlien']);