<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    //Relación d euno a muchos 
    public function productos()
    {
        return $this->hasMany(Producto::class);
    }

    //Relación a la inversa de uno a uno con característica
    public function caracteristica()
    {
        return $this->belongsTo(Caracteristica::class);
    }

    protected $fillable = ['caracteristica_id'];
}
