<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

//Route::group(['prefix' => 'auth'], function () {
//    Route::post('login', 'AuthController@login');
//    Route::post('signup', 'AuthController@signup');
//
//    Route::group(['middleware' => 'auth:api'], function() {
//        Route::get('logout', 'AuthController@logout');
//        Route::get('user', 'AuthController@user');

        // HomeController
        Route::get('productes/nous/{numero}', 'HomeController@getNProductes');
        Route::get('productes/getUltimesUnitats', 'HomeController@getUltimesUnitats');
        Route::get('productes/getUltimesUnitats2', 'HomeController@getUltimesUnitats2');

        // ProducteController
        Route::get('productes','ProducteController@getAllProductes');
        Route::get('productes/{producte_id}','ProducteController@getProducte');
        Route::get('productes/categoria/{categoria_id}', 'ProducteController@getAllCategoria'); // productes amb la id catgoria
        Route::get('productes_ofertes', 'ProducteController@getOfertes');
        Route::get('buscador/{nom}', 'ProducteController@buscador');
        Route::get('ordenar/{nom}', 'ProducteController@ordenar');

        // AdministradorController
        Route::get('admin/allproductes','AdministradorController@getAllProductes');
        Route::post('admin/add/producte','AdministradorController@addProducte');
        Route::post('admin/edit/producte{producte_id}','AdministradorController@editProducte');
        Route::post('admin/delete/producte{producte_id}','AdministradorController@deleteProducte');
        Route::post('admin/edit/{usuari_id}','AdministradorController@editAdmin');

        // MarcaController
        Route::get('marques','MarcaController@getAllMarca');
        Route::get('marques{marca_id}','MarcaController@getMarca');
        Route::post('marques/add','MarcaController@addMarca');
        Route::post('marques/edit/{marca_id}','MarcaController@editMarca');
        Route::post('marques/delete/{marca_id}','MarcaController@deleteMarca');

        // CategoriaContoller
        Route::get('categories','CategoriaController@getAllCategoria');
        Route::get('categories{categoria_id}','CategoriaController@getCategoria');
        Route::post('categories/edit/{categoria_id}','CategoriaController@editCategoria');
        Route::post('categories/delete/{categoria_id}','CategoriaController@deleteCategoria');
        Route::post('categories/add','CategoriaController@addCategoria');

        // ColorsController
        Route::get('color/all','ColorController@getAllColors');
        Route::get('color{color_id}', 'ColorController@getColor'); // Productes amb color de la id

//    });
//});
