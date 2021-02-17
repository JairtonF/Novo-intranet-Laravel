<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
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


Route::get('/ramais', function()
{
    return view('pages.ramais');
})->name('pages.ramais');

Route::get('/pesquisa', function()
{
    return view('pages.pesquisa');
})->name('pages.pesquisa');