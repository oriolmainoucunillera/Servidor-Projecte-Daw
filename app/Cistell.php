<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cistell extends Model
{
    protected $fillable = [
        'cistella_id', 'user_id', 'producte_id',
        'preu', 'quantitat', 'preu_final',
    ];
}
