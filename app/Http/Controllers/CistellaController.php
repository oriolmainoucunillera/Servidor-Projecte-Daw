<?php

namespace App\Http\Controllers;

use App\Cistell;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CistellaController extends Controller
{
    public function getAllCistells()
    {
        return Cistell::all();
    }

    public function getCistell($cistell_id)
    {
        $cistells = Cistell::where('id', $cistell_id)->get();
        return $cistells;
    }

    public function afegirCarrito(Request $request)
    {
        $cistell = new Cistell();
        $cistell->cistella_id = $request->cistella_id;
        $cistell->user_id = $request->user_id;
        $cistell->producte_id = $request->producte_id;
        $cistell->preu = $request->preuOferta;
        $cistell->quantitat = $request->cantidad;
        $cistell->preu_final = $request->preu_final;
        $cistell->save();
        return $cistell;
    }
}
