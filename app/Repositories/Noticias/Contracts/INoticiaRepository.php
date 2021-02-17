<?php

namespace App\Repositories\Noticias\Contracts;

interface INoticiaRepository {
    public function getAll (int $limit = 4);
}


?>