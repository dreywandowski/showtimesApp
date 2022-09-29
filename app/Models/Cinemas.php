<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cinemas extends Model
{
    use HasFactory;

// a one-to many relationshop between cinema and Showtimes
    public function showTimes(){
        return $this->belongsTo(Showtimes::class);
    }
}
