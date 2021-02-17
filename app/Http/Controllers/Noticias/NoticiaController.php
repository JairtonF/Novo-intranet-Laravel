<?php

namespace App\Http\Controllers\Noticias;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Noticias\NoticiaRepository;

class NoticiaController extends Controller {

    private $noticiaRepository;

    public function __construct(NoticiaRepository $noticiaRepository) {
        $this->noticiaRepository = $noticiaRepository;
    }

    public function loadNoticias() {
        try {
            $noticias = $this->noticiaRepository->getAll(5);

            return response()->json([
                "statusCode" => 200,
                "body" => $noticias
            ]);

        } catch(Exception $e) {
            return response()->json([
                "statusCode" => 500,
                "erro" => "Internal Server Error"
            ], 500);
        }
    }
    
}
