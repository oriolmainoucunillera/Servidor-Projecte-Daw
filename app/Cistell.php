<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cistell extends Model
{
    protected $fillable = [
        'user_id', 'producte_id', 'quantitat', 'preu_producte',
    ];
}
