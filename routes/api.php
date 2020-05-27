<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');

    Route::group(['middleware' => 'auth:api'], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');

        // AdministradorController
        Route::get('admin/allproductes','AdministradorController@getAllProductes'); // Retorna tots els productes
        Route::post('admin/add/producte','AdministradorController@addProducte'); // Afegeix un producte
        Route::post('admin/edit/producte{producte_id}','AdministradorController@editProducte'); // Edita el producte amb id especificat
        Route::post('admin/delete/producte/{producte_id}','AdministradorController@deleteProducte'); // Elimina el producte
        Route::post('admin/administrarAdmin', 'AdministradorController@administrarAdmin'); // Fer que un usuari sigui admin o no
        Route::get('admin/admin{id}','AdministradorController@getAdmin'); // Retorna l'admin --> no funciona!!!!!

        // CompraController
        Route::post('comprar', 'CompraController@comprarProducte'); // Realitza compra d'un producte

        // CistellaController
        //Route::get('cistells/all','CistellaController@getAllCistells'); // Retorna tots els cistells
        //Route::get('cistells{id}','CistellaController@getCistell'); // Retorna cistells amb id seleccionat
        //Route::get('preuCistella', 'CistellaController@preuTotal'); //Retorna el preu total de la cistella
        //Route::get('elementsCistella', 'CistellaController@elementsCistella'); //Retorna el nº d'elements de la cistella
        Route::post('afegirCarrito','CistellaController@afegirCarrito'); // Afegeix a la cistella
        Route::post('eliminarProductoCarrito/{id}','CistellaController@eliminarProductoCarrito'); // Esborrar un producte del carret
        Route::get('getCistellaId', 'CistellaController@getCistellaId'); //Retorna el id_cistella d'una cistella
        Route::get('cistella{id}','ExtraController@cistella'); // Retorna tots els productes del cistell
        Route::get('preuCompra{id}', 'ExtraController@preuCompra'); // Retorna el preu total d'una compra/cistella
        Route::get('numCistella{id}', 'ExtraController@productesCistella'); //Retorna el nombre total de productes a la cistella
        Route::get('idCistell{id}', 'ExtraController@idCistell');  //Retorna cistells amb id seleccionat

        // ComandaController
        Route::get('comandes/all','ComandaController@getAllComandes'); // Retorna totes les comandes
        Route::get('comandes{comanda_id}','ComandaController@getComanda'); // Retorna comandes amb id seleccionat
        Route::post('afegirComanda','ComandaController@afegirComanda'); // Afegeix comanda
        Route::get('allComandes', 'ComandaController@allComandes'); // Retorna totes les comandes

        // EventController
        Route::get('eventos', 'EventController@getAllEvents'); // mostra totes les tasques
        Route::post('eventos_delete/{id}', 'EventController@event_eliminar'); // //Eliminar una tasca determinada
        Route::post('evento_crear', 'EventController@event_crear'); // Crear una tasca
        Route::get('eventoDetalle{id}', 'EventController@eventoDetalle'); //Retorna un event amb el id determinat
    });
});

// HomeController
Route::get('productes/nous/{numero}', 'HomeController@getNProductes'); // Retorna els últims N productes
Route::get('productes/getUltimesUnitats', 'HomeController@getUltimesUnitats'); // Retorna els 4 productes amb menys stock
Route::get('productes/getUltimesUnitats2', 'HomeController@getUltimesUnitats2'); // Retorna els productes del 5 al 8 amb menys stock

// ProducteController
Route::get('productes/all','ProducteController@getAllProductes'); // Retorna tots els productes
Route::get('producte{producte_id}','ProducteController@getProducte'); // Retorna el producte amb id especificat
Route::get('productes/categoria/{categoria_id}', 'ProducteController@getAllCategoria'); // Productes amb la id catgoria
Route::get('getOfertes', 'ProducteController@getOfertes'); // Retorna els productes que estan en oferta
Route::get('buscador/{nom}', 'ProducteController@buscador'); // Retorna tots els productes amb el nom especificat
Route::get('ordenar/{nom}', 'ProducteController@ordenar'); // Retorna tots els productes ordenats per l'ordre especificat

// MarcaController
Route::get('marca/all','MarcaController@getAllMarca'); // Retorna totes les marques
Route::get('marca{marca_id}','MarcaController@getMarca'); // Retorna la marca del id especificat
Route::post('admin/marca/add','MarcaController@addMarca'); // Afegim una marca
Route::post('admin/marca/edit{marca_id}','MarcaController@editMarca'); // Editem una marca
Route::post('admin/marca/delete{marca_id}','MarcaController@deleteMarca'); // Eliminem una marca

//CategoriaController
Route::get('categoria/all', 'CategoriaController@getAllCategoria'); // Retorna totes les categories

// ColorsController
Route::get('color/all','ColorController@getAllColors'); // Retorna tots els colors
Route::get('color{color_id}', 'ColorController@getColor'); // Retorna els productes amb color_id especificat

// UserController
Route::get('allUsers','UserController@getAllUsers'); // Retorna tots els usuaris
Route::get('allUsers{user_id}','UserController@getUser'); // Retorna usuaris amb id seleccionat
