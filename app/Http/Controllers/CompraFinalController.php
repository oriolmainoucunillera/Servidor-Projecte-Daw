<?php

namespace App\Http\Controllers;

use App\CompraFinal;
use Illuminate\Http\Request;

class CompraFinalController extends Controller
{
    public function getAllCompra_final()
    {
        return CompraFinal::all();
    }

    public function getCompra_final($compra_final_id)
    {
        $compres_finals = CompraFinal::where('id', $compra_final_id)->get();
        return $compres_finals;
    }
}
