<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;

class Alien extends Model
{
    use HasFactory;

    // make Alien mass assignable using guarded only if we use the create facade
    protected $guarded = [];
    // or fillable if we use the create method

    // make a relation with my country
    // the function is public
    // the function is called country (model name but no capital letter)
    public function country(){
        return $this->belongsTo(Country::class);
    }
}
