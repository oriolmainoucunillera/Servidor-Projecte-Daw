<?php

namespace App\Http\Controllers;

use App\Producte;
use Illuminate\Http\Request;

class ProducteController extends Controller
{
    public function getAllProductes()
    {
        return Producte::all();
    }

    public function getProducte($id)
    {
        $productes =  Producte::findOrFail($id);
        return $productes;
    }

    public function getAllCategoria($categoria_id)
    {
        $productes = Producte::where('categoria_id', $categoria_id)->get();
        return $productes;
    }

    public function getOfertes()
    {
        $productes = Producte::where('oferta', '>', 0)->get();
        return $productes;
    }

    public function buscador($nom)
    {
        $query = trim($nom);
        $productes = Producte::where('nom', 'LIKE', '%' . $query . '%')->get();
        return $productes;
    }

    public function ordenar($ordre) {
        if ($ordre == 'nom_asc') {
            $productes = Producte::query()
                ->orderBy('nom', 'asc')
                ->get();
        } else if ($ordre == 'nom_desc') {
            $productes = Producte::query()
                ->orderBy('nom', 'desc')
                ->get();
        } else if($ordre == 'preu_asc') {
            $productes = Producte::query()
                ->orderBy('preu', 'asc')
                ->get();
        } else if($ordre == 'preu_desc') {
            $productes = Producte::query()
                ->orderBy('preu', 'desc')
                ->get();
        }
        return $productes;
    }
}
