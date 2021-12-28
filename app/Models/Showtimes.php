<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showtimes extends Model
{
    use HasFactory;

    // a one-to many relationshop between cinema and Showtimes
    public function showTimes(){
        return $this->hasMany(Cinemas::class);
    }

    // a one-to many relationshop between movies and Showtimes
    public function movies(){
        return $this->hasMany(Movies::class);
    }


     protected $fillable = [
        'movie',
        'cinema',
        'showtime'
    ];
}
