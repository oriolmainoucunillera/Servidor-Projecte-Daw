<?php

namespace App\Http\Controllers;

use App\Producte;
use Illuminate\Http\Request;
use App\Color;

class ColorController extends Controller
{
    public function getAllColors()
    {
        return Color::all();
    }

    public function getColor($color_id)
    {
        $productes = Producte::where('color_id', $color_id)->get();
        return $productes;
    }
}
