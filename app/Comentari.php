<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentari extends Model
{
    protected $fillable = [
        'user_id', 'producte_id', 'comentari', 'foto',
    ];
}
