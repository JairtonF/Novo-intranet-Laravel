<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Noticias\Noticia;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PesquisaController extends Controller
{
    
    public function search(Request $request){

        $pesquisa = DB::table('links_rapidos')->where('titulo', 'LIKE', '%'.$request->search.'%') ->get();

        return view('pages.pesquisa', ['pesquisa' => $pesquisa, 'search'=>$request->search]);

    }
}
