<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RamaisController;


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

Route::get('/ramais', [RamaisController::class, "index"]);

Route::post('/ramais', [RamaisController::class, "search"]);


// #######################*ROTAS-PESQUISA*#########################
Route::get('/pesquisa', function()
{
    return view('pages.pesquisa');
})->name('pages.pesquisa');

