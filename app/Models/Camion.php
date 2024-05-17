<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camion extends Model
{
    public function camioneros(){
        return $this->belongsToMany('App\Models\Camionero');
    }
    use HasFactory;
}
