<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UfoController extends Controller
{
    public function show() {
        $aliens = DB::table('aliens')->get();
        //dd($aliens);
        return view('aliens.home', compact('aliens'));
    }
}
