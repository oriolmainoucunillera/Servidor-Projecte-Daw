<?php

namespace App\Http\Controllers;

use App\Cistell;
use Illuminate\Http\Request;

class CistellaController extends Controller
{
    public function getAllCistells()
    {
        return Cistell::all();
    }

    public function getCistell($cistell_id)
    {
        $cistells = Cistell::where('id', $cistell_id)->get();
        return $cistells;
    }
}
