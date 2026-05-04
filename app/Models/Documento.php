<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    //Relación documento con persona de uno a uno, se pone en el modelo donde no esta la clave foranea
    use HasFactory;
    public function persona()
    {
        return $this->hasOne(Persona::class);
    }
}
