<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function getAllCategoria()
    {
        return Categoria::all();
    }

    public function getCategoria($id)
    {
        return Categoria::find($id);
    }

    public function addCategoria(Request $request)
    {
        $categories = Categoria::create($request->all());
        return $categories;
    }

    public function editCategoria($id, Request $request) {
        $categories = Categoria::findOrFail($id);
        $categories->update($request->all());
        return $categories;
    }

    public function deleteCategoria($id) {
        $categories = Categoria::findOrFail($id);
        $categories->delete();
        return 204;
    }
}
