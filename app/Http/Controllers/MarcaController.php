<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;
use App\Producte;

class MarcaController extends Controller
{
    public function getAllMarca()
    {
        return Marca::all();
    }

    public function getMarca($marca_id)
    {
        $productes = Producte::where('marca_id', $marca_id)->get();
        return $productes;
    }

    public function addMarca(Request $request)
    {
        $marques = Marca::create($request->all());
        return $marques;
    }

    public function editMarca($id, Request $request)
    {
        $marques = Marca::findOrFail($id);
        $marques->update($request->all());
        return $marques;
    }

    public function deleteMarca($id)
    {
        $marques = Marca::findOrFail($id);
        $marques->delete();
        return 204;
    }
}
