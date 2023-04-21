<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UfoController;
use Illuminate\Http\Request;
use App\Models\Playground;
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

Route::post('/ufo',function(Request $request){
    $playground = new Playground();
    $playground->name = $request->name;
    $playground->message = $request->message;
    $playground->save();

    return view ('welcome', ['name' => $request->name]);
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

Route::get('/aliens',[UfoController::class, 'show'])->name('aliens');
Route::get('/aliens/{id}',[UfoController::class, 'showAlien']);


// create routes based on the navigation

// HOME routes
Route::get('/', function () {
    return view('welcome.home');
})->name('home');

// ABOUT routes
Route::get('/about', function () {
    return view('about.home');
})->name('about');

// BLOG routes
Route::get('/blog', function () {
    return view('blog.home');
})->name('blog');

// CONTACT routes
Route::get('/contact', function () {
    return view('contact.home');
})->name('contact');