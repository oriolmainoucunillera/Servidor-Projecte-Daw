<?php

namespace App\Http\Controllers;

use App\Cistell;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CistellaController extends Controller
{
    public function getAllCistells()
    {
        $cistell = Cistell::all();
        return $cistell;
    }

    public function elementsCistella()
    {
        $elements = Cistell::count();
        return $elements;
    }

    public function getCistellaId()
    {
        $cistella_id = Cistell::query()
            ->first()
            ->value('cistella_id');
        return $cistella_id;
    }

    public function getCistell($id)
    {
        $productes = Cistell::findOrFail($id);
        return $productes;
    }

    public function afegirCarrito(Request $request)
    {
        $cistell = new Cistell();
        $cistell->cistella_id = $request->cistella_id;
        $cistell->user_id = $request->user_id;
        $cistell->producte_id = $request->producte_id;
        $cistell->preu = $request->preu;
        $cistell->quantitat = $request->quantitat;
        $cistell->preu_final = $request->preu_final;
        $cistell->save();
        return $cistell;
    }

    public function eliminarProductoCarrito($id)
    {
        $cistell = Cistell::findOrFail($id);
        $cistell->delete();
        return 204;
    }

    public function preuTotal()
    {
        $preuTotal = Cistell::sum('preu_final');
        return $preuTotal;
    }
}
