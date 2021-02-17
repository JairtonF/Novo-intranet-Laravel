<?php

namespace App\Repositories\Noticias;

use App\Repositories\Noticias\Contracts\INoticiaRepository;
use App\Repositories\BaseEloquentRepository;
use App\Models\Noticias\Noticia;

class NoticiaRepository extends BaseEloquentRepository implements INoticiaRepository {
    public function __construct () {
        parent::__construct(Noticia::class);
    }

    public function getAll (int $limit = 0) {
        return $this->query('ultima_modificacao', 'desc')->simplePaginate($limit);
    }
}


?>