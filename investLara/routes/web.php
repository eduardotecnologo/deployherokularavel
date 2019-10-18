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
Route::get('/', ['uses' => 'Controller@homepage']);
Route::get('/cadastro', ['uses' => 'Controller@cadastrar']);

/**
 * Routes to auth suers
 */
Route::get('/login', ['uses' => 'Controller@fazerlogin']);
Route::post('/login', ['as' => 'user.login', 'uses' => 'Controller@login']);

// Route::get('/', function () {
//     return view('welcome');
// });
