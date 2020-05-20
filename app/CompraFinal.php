<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompraFinal extends Model
{
    protected $fillable = [
        'user_id', 'comanda_id',
        'preu_final', 'direccio',
    ];
}
