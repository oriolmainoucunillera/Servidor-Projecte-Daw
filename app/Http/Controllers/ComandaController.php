<?php

namespace App\Http\Controllers;

use App\Comanda;
use Illuminate\Http\Request;

class ComandaController extends Controller
{
    public function getAllComandes()
    {
        return Comanda::all();
    }

    public function getComanda($comanda_id)
    {
        $comandes = Comanda::where('id', $comanda_id)->get();
        return $comandes;
    }
}
