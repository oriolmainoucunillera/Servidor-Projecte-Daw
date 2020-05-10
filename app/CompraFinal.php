<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompraFinal extends Model
{
    protected $fillable = [
        'cistella_id', 'preu_final',
        'direccio_entrega', 'numero_targeta',
    ];
}
