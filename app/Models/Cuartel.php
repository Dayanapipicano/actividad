<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuartel extends Model
{
    use HasFactory;

       // uno a uno polimorfica
       public function image(){
        return $this->morphOne('App\Models\Image','imageable');
    }
}
