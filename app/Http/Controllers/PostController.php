<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Noticias\Noticia;

class PostController extends Controller
{
    public function index(){

        $posts = Noticia::get();


        return view ('pages.pesquisa', compact('posts'));

    }
}
