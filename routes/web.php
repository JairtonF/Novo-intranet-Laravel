<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\PostController;

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

Route::get('/', [HomeController::class, "showPage"]);

//Criação do metodo Post controller para mostrar as noticias no pesquisa.php
Route::get('/pesquisa', [PostController::class, "index"]);


// #######################*ROTAS-RAMAIS*#########################

Route::group(['prefix' => 'ramais'], function () {
    Route::get('/', 'RamaisController@index');
    Route::post('/', 'RamaisController@search');
});

// #######################*ROTAS-RAMAIS-SIMPLES*#########################
Route::get('/ramais', function()
{
    return view('pages.ramais');
})->name('pages.ramais');

// #######################*ROTAS-PESQUISA*#########################
Route::get('/pesquisa', function()
{
    return view('pages.pesquisa');
})->name('pages.pesquisa');

