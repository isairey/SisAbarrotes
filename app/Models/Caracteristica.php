<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{
    use HasFactory;
    //Relación principal de uno a uno con categoria, marca, presentacione
    public function categoria()
    {
        return $this->hasOne(Categoria::class);
    }

    public function marca()
    {
        return $this->hasOne(Marca::class);
    }

    public function presentacione()
    {
        return $this->hasOne(Presentacione::class);
    }

    // Para realizar la asignación masiva, tenemos que poseer la propiedad fillable tanto en
    // característica como en categoria
    // Fillable va a tener un arreglo de los campos que deseamos llenar

    protected $fillable = ['nombre', 'descripcion'];
}
