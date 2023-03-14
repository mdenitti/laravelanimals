<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    // to demonstrate the use of a controller with a route and method
    public function show($name) {
        return "my name is $name";
    }
}
