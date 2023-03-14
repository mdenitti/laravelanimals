<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Alien;

class UfoController extends Controller
{
    public function show() {
        //$aliens = DB::table('aliens')->get();
        $aliens = Alien::all();
        //dd($aliens);
        return view('aliens.home', compact('aliens'));
    }
}
