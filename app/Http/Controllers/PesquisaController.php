<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Noticias\Noticia;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PesquisaController extends Controller
{
    
    public function search(Request $request){

        $busca = $request->search;

        $pesquisa = DB::table('links_rapidos')
                ->where('titulo', 'LIKE', '%'.$busca.'%')
                ->get();

        $result = DB::table('noticias')
                ->where('tag', 'LIKE', '%'.$busca.'%')
                ->orWhere('titulo', 'LIKE', '%'.$busca.'%')
                ->get();
        
        return view('pages.pesquisa', compact('result', 'pesquisa'));

    }
}
