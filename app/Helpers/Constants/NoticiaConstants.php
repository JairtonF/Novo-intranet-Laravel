<?php

namespace App\Helpers\Constants;

class NoticiaConstants {

    public const NEWS_URL = 'https://ifce.edu.br/maracanau/colecoes/noticias/RSS?fmt=xml';
    public const DEFAULT_IMAGE_URL = "https://intranet.maracanau.ifce.edu.br/img/noticias/noticiaIf.jpg";
    public const DEFAULT_TAG_TEXT = "Noticia";
    public const NEWS_CONTENT_SELECTOR = 'div[property="rnews:articleBody"]';
    public const NEWS_IMAGE_SELECTOR = 'img[property="rnews:thumbnailUrl"]';
    public const NEWS_TAG_SELECTOR = 'h2[property="rnews:alternativeHeadline"]';
    public const NEWS_DATE_SELECTOR = 'span[property="rnews:dateModified"]';

}


?>