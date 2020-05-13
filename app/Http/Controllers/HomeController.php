<?php

namespace App\Http\Controllers;

use App\Producte;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function getNProductes($max)
    {
        $productes = Producte::query()
            ->orderBy('created_at', 'desc')
            ->limit($max)
            ->get();
        return $productes;
    }
}
