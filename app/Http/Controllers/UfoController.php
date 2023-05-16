<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Alien;
use App\Models\User;

class UfoController extends Controller
{
    public function show() {
        //$aliens = DB::table('aliens')->get();
        $aliens = Alien::paginate(5);
        $user = User::find(1);
        //dd($aliens);
        return view('aliens.home', compact('aliens','user'));
    }

    public function showAlien ($id) {
        /* $alien = Alien::find($id);
        if (!$alien) {
            abort(404);
        } */

        $alien = Alien::where('id', $id)->firstOrFail();
        

        return view('aliens.details', compact('alien'));
    }
}
