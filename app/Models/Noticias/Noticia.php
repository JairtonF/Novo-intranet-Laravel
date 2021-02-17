<?php

namespace App\Models\Noticias;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table = 'noticias';

    protected $primaryKey = 'id';

    protected $guarded = [];

    protected $fillable = [
        'titulo', 'descricao', 'conteudo', 'link', 'imagem',
        'tag', 'ultima_modificacao'
    ];
    
}
