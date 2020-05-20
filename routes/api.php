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
        Route::get('productes/nous/{numero}', 'HomeController@getNProductes'); // Retorna els últims N productes
        Route::get('productes/getUltimesUnitats', 'HomeController@getUltimesUnitats'); // Retorna els 4 productes amb menys stock
        Route::get('productes/getUltimesUnitats2', 'HomeController@getUltimesUnitats2'); // Retorna els productes del 5 al 8 amb menys stock

        // ProducteController
        Route::get('productes/all','ProducteController@getAllProductes'); // Retorna tots els productes
        Route::get('productes/{producte_id}','ProducteController@getProducte'); // Retorna el producte amb id especificat
        Route::get('productes/categoria/{categoria_id}', 'ProducteController@getAllCategoria'); // Productes amb la id catgoria
        Route::get('productes_ofertes', 'ProducteController@getOfertes'); // Retorna els productes que estan en oferta
        Route::get('buscador/{nom}', 'ProducteController@buscador'); // Retorna tots els productes amb el nom especificat
        Route::get('ordenar/{nom}', 'ProducteController@ordenar'); // Retorna tots els productes ordenats per l'ordre especificat

        // CompraController
        Route::post('comprar', 'CompraController@comprarProducte'); // Realitza compra d'un producte

        // AdministradorController
        Route::get('admin/allproductes','AdministradorController@getAllProductes'); // Retorna tots els productes
        Route::post('admin/add/producte','AdministradorController@addProducte'); // Afegeix un producte
        Route::post('admin/edit/producte{producte_id}','AdministradorController@editProducte'); // Edita el producte amb id especificat
        Route::post('admin/delete/producte{producte_id}','AdministradorController@deleteProducte'); // Elimina el producte
        Route::post('admin/edit/{usuari_id}','AdministradorController@editAdmin'); // Edita el admin amb id especificat
        Route::post('admin/addAdmin','AdministradorController@addAdmin'); // Afegir un admin
        Route::get('admin/allAdmins', 'AdministradorController@allAdmins'); // Retorna tots els admins

        // MarcaController
        Route::get('marca/all','MarcaController@getAllMarca'); // Retorna totes les marques
        Route::get('marques{marca_id}','MarcaController@getMarca'); // Retorna la marca del id especificat
        Route::post('admin/marca/add','MarcaController@addMarca'); // Afegim una marca
        Route::post('admin/marca/edit{marca_id}','MarcaController@editMarca'); // Editem una marca
        Route::post('admin/marca/delete{marca_id}','MarcaController@deleteMarca'); // Eliminem una marca

        // CategoriaContoller
        Route::get('categoria/all','CategoriaController@getAllCategoria'); //Retorna totes les categories
        Route::get('categoria{categoria_id}','CategoriaController@getCategoria'); // Retorna la categoria del id especificat
        Route::post('admin/categoria/edit{categoria_id}','CategoriaController@editCategoria'); // Editem una categoria
        Route::post('admin/categoria/delete{categoria_id}','CategoriaController@deleteCategoria'); // Eliminem una categoria
        Route::post('admin/categoria/add','CategoriaController@addCategoria'); // Afegim una categoria

        // ColorsController
        Route::get('color/all','ColorController@getAllColors'); // Retorna tots els colors
        Route::get('color{color_id}', 'ColorController@getColor'); // Retorna el color amb id especificat

        // UserController
        Route::get('allUsers','UserController@getAllUsers'); // Retorna tots els usuaris
        Route::get('allUsers{user_id}','UserController@getUser'); // Retorna usuaris amb id seleccionat

        // CistellaController
        Route::get('cistells/all','CistellaController@getAllCistells'); // Retorna tots els cistells
        Route::get('cistells{cistella_id}','CistellaController@getCistell'); // Retorna cistells amb id seleccionat

        // ComandaController
        Route::get('comandes/all','ComandaController@getAllComandes'); // Retorna totes les comandes
        Route::get('comandes{comanda_id}','ComandaController@getComanda'); // Retorna comandes amb id seleccionat

        // CompraFinalController
        Route::get('compresfinals/all','CompraFinalController@getAllCompra_final'); // Retorna totes les compres finals
        Route::get('compresfinals{comprafinal_id}','CompraFinalController@getCompra_final'); // Retorna compres finals amb id seleccionat

//    });
//});
