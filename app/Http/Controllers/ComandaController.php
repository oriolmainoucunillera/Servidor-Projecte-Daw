<?php

namespace App\Http\Controllers;

use App\Comanda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function afegirComanda(Request $request) {
        $comanda = new Comanda();
        $comanda->cistella_id = $request->cistella_id;
        $comanda->user_id = $request->user_id;
        $comanda->producte_id = $request->producte_id;
        $comanda->preu = $request->preu;
        $comanda->quantitat = $request->quantitat;
        $comanda->preu_final = $request->preu_final;
        $comanda->save();

        $numProductes = DB::table('productes')->where('id', $request->producte_id)->value('stock');
        $final = $numProductes - $request->quantitat;
        DB::table('productes')->where('id', $request->producte_id)->update([ 'stock' => $final ]);
        return $comanda;
    }

    public function allComandes() {
        $comandes = Comanda::all();
        return$comandes;
    }
}
