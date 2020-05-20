<?php

namespace App\Http\Controllers;

use App\Comanda;
use App\CompraFinal;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function comprarProducte(Request $request) {
        $compra = new Compra();
        $compra->cantidad = $request->cantidad;
        $compra->producte_id = $request->producte_id;
        $compra->user_id = $request->user_id;
        $compra->save();
        return $compra;
    }
}
