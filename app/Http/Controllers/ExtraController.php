<?php

namespace App\Http\Controllers;
use App\Cistell;

class ExtraController extends Controller
{
    public function cistella($id) {
        $cistell = Cistell::where('user_id', $id)->get();
        return $cistell;
    }

    public function preuCompra($id)
    {
        $preuTotal = Cistell::where('user_id', $id)->sum('preu_final');
        return $preuTotal;
    }

    public function productesCistella($id)
    {
        $elements = Cistell::where('user_id', $id)->count();
        return $elements;
    }

    public function idCistell($id)
    {
        $cistella_id = Cistell::where('user_id', $id)
            ->value('cistella_id');
        return $cistella_id;
    }
}
