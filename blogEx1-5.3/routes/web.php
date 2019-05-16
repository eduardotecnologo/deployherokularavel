<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Grupos de Rotas
Route::group(['prefix' => 'panel'], function(){
    Route::get('/', function(){
        return 'Você está no Dashboard';
    });
    Route::get('/grupo01', function(){
        return 'Você está no Grupo 01';
    });
    Route::get('/grupo02', function(){
        return 'Você está no Grupo 02';
    });
});

// Rotas com Parametros (Ids)
Route::get('/categoria2/{idCat?}', function($idCat=null){
    return "Posts de Categorias com parametro opcional {$idCat}";
});

Route::get('/categoria/{idCat}', function($idCat){
    return "Posts de Categorias {$idCat}";
});

// Tipos de Roatas
// Route::get('/', function(){
//     return redirect ()->route('rota-name');
// });
// Route::get('/', function(){
//     return redirect ('contato');
// });
// Route::get('/rota01/rota02/rota03', function(){
//     return "Rota extensaaaa";
// })->name('rota-name');

Route::any('/any', function(){
    return 'Route Any';
});

Route::match(['get','post'], '/match', function(){
    return 'Rout Match';
});

Route::get('/contato', function(){
    return view('contato');
});
Route::get('/empresa', function(){
    return view('empresa');
});

Route::get('/', function () {
    return view('welcome');
});
