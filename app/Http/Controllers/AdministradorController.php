<?php

namespace App\Http\Controllers;

use App\Administrador;
use App\Producte;
use Illuminate\Http\Request;

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

    public function addAdmin(Request $request)
    {
        $admin = Administrador::create($request->all());
        return $admin;
    }

    public function editAdmin($id, Request $request)
    {
        $admin = Administrador::findOrFail($id);
        $admin->update($request->all());
        return $admin;
    }

    public function allAdmins() {
        return Administrador::all();
    }
}
