<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producte extends Model
{
    protected $fillable = [
        'nom', 'marca_id', 'stock',
        'preu', 'categoria_id', 'color_id',
        'imatge', 'descripcio_curta',
        'descripcio_llarga', 'oferta', 'preuOferta'
    ];
}
