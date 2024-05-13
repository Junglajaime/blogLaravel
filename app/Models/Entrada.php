<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    protected $fillable = [
        'usuario_id', 'categoria_id', 'titulo', 'imagen', 'descripcion', 'fecha'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}

