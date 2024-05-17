<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    public function camionero(){
        return $this->hasOne('App\Models\Camionero');//RECUPERAR LA COLECCION DE POST QUE PERTENECEN A ESTE USUARIO
    }
    use HasFactory;
}
