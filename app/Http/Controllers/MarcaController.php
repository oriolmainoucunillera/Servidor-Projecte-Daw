<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;

class MarcaController extends Controller
{
    public function getAllMarques()
    {
        return Marca::all();
    }

    public function getMarca($id)
    {
        return Marca::find($id);
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
