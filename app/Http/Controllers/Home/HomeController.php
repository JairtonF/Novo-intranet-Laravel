<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Noticias\NoticiaRepository;
use App\Repositories\Noticias\Contracts\INoticiaRepository;

class HomeController extends Controller
{
    private $noticiaRepository;

    public function __construct(INoticiaRepository $noticiaRepository) {
        $this->noticiaRepository = $noticiaRepository;
    }

    public function showPage() {
        $noticias = $this->noticiaRepository->getAll(5);
        return view("pages.home", compact('noticias'));
    }

}
