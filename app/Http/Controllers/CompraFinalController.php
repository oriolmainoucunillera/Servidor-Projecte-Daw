<?php

namespace App\Http\Controllers;

use App\CompraFinal;
use Illuminate\Http\Request;

class CompraFinalController extends Controller
{
    // FINALMENT CONTROLLER NO UTILITZAT.

    /*public function getAllCompra_final()
    {
        return CompraFinal::all();
    }

    public function getCompra_final($compra_final_id)
    {
        $compres_finals = CompraFinal::where('id', $compra_final_id)->get();
        return $compres_finals;
    }

    public function afegirCompra_final(Request $request)
    {
        $compraFinal = new CompraFinal();
        $compraFinal->user_id = $request->user_id;
        $compraFinal->comanda_id = $request->comanda_id;
        $compraFinal->preu_final = $request->preu_final;
        $compraFinal->direccio = $request->direccio;
        $compraFinal->save();
        return $compraFinal;
    }*/
}
