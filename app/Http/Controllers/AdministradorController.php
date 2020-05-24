<?php

namespace App\Http\Controllers;

use App\Administrador;
use App\Producte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdministradorController extends Controller
{
    public function getAllProductes()
    {
        return Producte::all();
    }

    public function addProducte(Request $request) {
        $producte = new Producte();
        $producte->nom = $request->nom;
        $producte->marca_id = $request->marca_id;
        $producte->stock = $request->stock;
        $producte->preu = $request->preu;
        $producte->categoria_id = $request->categoria_id;
        $producte->color_id = $request->color_id;
        $producte->descripcio_curta = $request->descripcio_curta;
        $producte->descripcio_llarga = $request->descripcio_llarga;
        $producte->oferta = $request->oferta;
        $producte->preuOferta = $request->preuOferta;
        $producte->imatge = $request->imatge;
        $producte->save();
        return $producte;
    }

    public function editProducte($id, Request $request) {
        $productes = Producte::findOrFail($id);
        $productes->update($request->all());
        return $productes;
    }

    public function deleteProducte($id) {
        $productes = Producte::findOrFail($id);
        $productes->delete();
        return 204;
    }

    public function getAdmin($id) {
        $admin =  Administrador::findOrFail($id);
        return $admin;
    }

    public function administrarAdmin(Request $request) {
        DB::table('users')->where('id', $request->id)->update([ 'esAdmin' => $request->esAdmin ]);
    }
}
