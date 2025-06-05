<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    public function bloques()
    {
        return $this->hasMany(Bloque::class, 'proyecto_id');
    }

    public function piezas()
    {
        return $this->hasMany(Pieza::class, 'proyecto_id');
    }
}
