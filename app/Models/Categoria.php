<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    //Relación de muchos a muchos con productos
    public function productos()
    {
        return $this->belongsToMany(Producto::class)->withTimestamps();
    }

    //Relacion a la inversa de uno a uno con característica 
    public function caracteristica()
    {
        return $this->belongsTo(Caracteristica::class);
    }

    // Para realizar la asignación masiva, tenemos que poseer la propiedad fillable tanto en
    // característica como en categoria
    // Fillable va a tener un arreglo de los campos que deseamos llenar
    protected $fillable = ['caracteristica_id'];
}
