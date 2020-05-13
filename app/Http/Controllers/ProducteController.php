<?php

namespace App\Http\Controllers;

use App\Producte;
use App\Categoria;
use Illuminate\Http\Request;

class ProducteController extends Controller
{
    public function getAllProductes()
    {
        return Producte::all();
    }

    public function getProducte($id)
    {
        return Producte::find($id);
    }

    public function getAllCategoria($categoria_id)
    {
        //$idCategoria = Categoria::where('id', $categoria_id)->get();
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
}
