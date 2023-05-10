<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UfoController;
use Illuminate\Http\Request;
use App\Models\Playground;
use App\Models\Alien;
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

Route::get('/testrelation', function () {
   // get the aliens that have a country assigned to them
    $aliens = Alien::whereHas('country')->get();
    
   // get the aliens that have no county
    $aliens = Alien::whereDoesntHave('country')->get();
    
   // get all the aliens wich have a country and load them eager
    $aliens = Alien::with('country')->find(13);
    return $aliens->country->name;
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
    $countries = App\Models\Country::all();
    return view('welcome.home', compact('countries'));
})->name('home');

Route::post('/process', function (Request $request) {
      // Validate the form data
      
        $validation = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'location' => 'required',
            'country_id' => 'required',
            'date' => 'required|date',
            'time' => 'required'
        ]);

        // use the create facade to create a new alien
        $alien = Alien::create($validation);
        // redirect to the aliens page with a success message (session/flash)

        /* session()->flash('message', 'Request has been received!, and will be moderated soon... we will keep in touch! Thank you!'); */
        
        return redirect()->route('home')->with('message', 'Request has been received!, and will be moderated soon... we will keep in touch! Thank you!');
        
        
}
);

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