<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class RamaisController extends Controller
{
    public function index()
    {
        if (cache('response')) {
            $response = cache('response');
        } else {
            $this->save_cache();
            $response = cache('response');
        }
        
        $user_search = 0;

        return view('pages/ramais', compact('response'));
    }

    public function search(Request $search)
    {
        $user_search = $search->input('busca');

        if ($user_search) {
            $BD_API_SEARCH_SETOR_URL = "http://bd-h.maracanau.ifce.edu.br/api/data/12345678/setor/".$user_search;

            $client = new \GuzzleHttp\Client();
    
            $request = $client->get($BD_API_SEARCH_SETOR_URL);
            
            $response = $request->getBody()->getContents();
            $response = json_decode($response);
    
            $response = $response->resultados;

            $response = $this->default_user_setor($response);
        } else {
            $response = cache('response');
        }

        return view('pages/ramais', compact('response', 'user_search'));
    }

    public function save_cache()
    {
        $BD_API_SEARCH_SETOR_URL = "http://bd-h.maracanau.ifce.edu.br/api/data/12345678/setor";

        $client = new \GuzzleHttp\Client();

        $request = $client->get($BD_API_SEARCH_SETOR_URL);
        
        $response = $request->getBody()->getContents();
        $response = json_decode($response);

        $response = $response->resultados;

        $response = $this->default_user_setor($response);

        Cache::rememberForever('response', function() use ($response) {
            return $response;
        });
    }

    public function default_user_setor($response)
    {
        $BD_API_SEARCH_RESPONSIBLE_SETOR_URL_FROM_ID = "http://bd-h.maracanau.ifce.edu.br/api/data/id/12345678/pessoa/";

        $client = new \GuzzleHttp\Client();

        foreach ($response as $setor) {
            if($setor->responsavel_id) {
                $responsavel_setor = $client->get($BD_API_SEARCH_RESPONSIBLE_SETOR_URL_FROM_ID.$setor->responsavel_id);

                $responsavel_setor = $responsavel_setor->getBody()->getContents();
                $responsavel_setor = json_decode($responsavel_setor);

                $responsavel_setor = $responsavel_setor->resultados;
            }

            if($responsavel_setor) {
                $setor->nome_responsavel = $responsavel_setor->nome;
                $setor->email_responsavel = $responsavel_setor->email;
            } else {
                $setor->nome_responsavel = "Nulo";
                $setor->email_responsavel = "Nulo";
            }
        }

        return $response;
    }
}
