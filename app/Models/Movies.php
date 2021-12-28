<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;

    // a one-to many relationshop between movies and Showtimes
    public function movies(){
        return $this->belongsTo(Showtimes::class);
    }
}
