<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Alien;

class Country extends Model
{
    use HasFactory;

    // make a relation with my alien
    // the function is public
    // the function is called aliens (model name but no capital letter)
   
    public function alien(){
        return $this->hasMany(Alien::class);
    }
    
}
