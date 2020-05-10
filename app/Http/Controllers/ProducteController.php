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
        return Producte::find($id);
    }

    public function getAllCategoria($nom)
    {
        $productes = Producte::query()
            ->where('categoria','=', $nom)
            ->get();
        return $productes;
    }

    public function getOfertes()
    {
        $productes = Producte::query()
            ->where('oferta','>', 0)
            ->get();
        return $productes;
    }


}
