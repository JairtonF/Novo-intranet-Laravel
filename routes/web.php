<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\RamaisController;
use App\Http\Controllers\PesquisaController;


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


// #######################*ROTAS-RAMAIS*#########################

Route::get('/ramais', [RamaisController::class, "index"]);

Route::post('/ramais', [RamaisController::class, "search"]);


// #######################*ROTAS-PESQUISA*#########################

Route::get('/pesquisa', [PesquisaController::class, "search"]);

// #######################*ROTAS-TESTE*#########################

Route::view('/teste', 'pages.teste');

