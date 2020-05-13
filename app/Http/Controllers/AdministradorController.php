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
        $productes = Producte::create($request->all());
        return $productes;
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

    public function editAdmin($id, Request $request)
    {
        $admin = Administrador::findOrFail($id);
        $admin->update($request->all());
        return $admin;
    }
}
