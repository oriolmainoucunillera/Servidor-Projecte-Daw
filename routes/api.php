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

        // HomeController
        Route::get('productes/nous', 'HomeController@getNProductes');

        // ProducteController
        Route::get('productes/all','ProducteController@getAllProductes');
        Route::get('productes/{producte_id}','ProducteController@getProducte');
        Route::get('productes/{producte_nom}', 'ProducteController@getAllCategoria');
        Route::get('productes/ofertes', 'ProducteController@getOfertes');

        // AdministradorController
        Route::get('admin/all','AdministradorController@getAllProductes');
        Route::post('admin/add/producte','AdministradorController@addProducte');
        Route::post('admin/edit/producte/{producte_id}','AdministradorController@editProducte');
        Route::post('admin/delete/producte/{producte_id}','AdministradorController@deleteProducte');
        Route::post('admin/edit/usuari/{usuari_id}','AdministradorController@editUsuari');

    });
});
