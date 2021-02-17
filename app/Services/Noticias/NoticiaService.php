<?php

namespace App\Services\Noticias;

use App\Models\Noticias\Noticia;
use PHPHtmlParser\Dom;
use App\Helpers\Constants\NoticiaConstants;
use Carbon\Carbon;
use InvalidArgumentException;
use App\Services\Noticias\Contracts\INoticiaService;

class NoticiaService implements INoticiaService {

    private $dom;
    
    public function __construct(Dom $dom) {
        $this->dom = $dom;
    }

    public function start() {
        $news = $this->captureNews();

        $this->saveAllToDatabase($news);
        echo("Operação concluída");
        
    }

    private function captureNews() {

        $body = $this->getHtmlContents(NoticiaConstants::NEWS_URL);
        $jsonData = $this->xmlToJson($body);

        $noticiasReturn = array();
        $noticias = $jsonData->item;

        foreach($noticias as $noticia) {
            $preparedNews = $this->prepareNews($noticia);

            if($preparedNews != null) array_push($noticiasReturn, $preparedNews);

        }

        return $noticiasReturn;

    }

    private function saveAllToDatabase(array $noticias) {
        foreach($noticias as $noticia) {
            $this->saveToDatabase((array) $noticia);

        }

    }

    /**
     * captureNews() methods usage
    */

    private function prepareNews($noticia) {
        if($this->existsNews($noticia)) return null;

        $bodyLink = $this->getHtmlContents($noticia->link);

        $this->dom->loadStr($bodyLink);
        
        $noticia->titulo = $noticia->title;
        $noticia->descricao = $noticia->description;
        $noticia->conteudo = $this->captureNewsContent();
        $noticia->imagem = $this->captureNewsImageUrl();
        $noticia->tag = $this->captureTag();
        $noticia->ultima_modificacao = $this->captureDate();

        unset($noticia->title);
        unset($noticia->description);

        return $noticia;

    }

    private function captureNewsContent() {
        $query = $this->dom->find(NoticiaConstants::NEWS_CONTENT_SELECTOR)[0]->find('p');
        $content = $query->text;

        return $content;

    }

    private function captureNewsImageUrl() {
        $query = $this->dom->find(NoticiaConstants::NEWS_IMAGE_SELECTOR);
        
        if(!isset($query[0])) {
            return NoticiaConstants::DEFAULT_IMAGE_URL; 
        }

        $imageUrl = $query[0]->getAttribute('src');

        return $imageUrl;
    }

    private function captureTag() {
        $query = $this->dom->find(NoticiaConstants::NEWS_TAG_SELECTOR);
        
        if(!isset($query[0])) {
            return NoticiaConstants::DEFAULT_IMAGE_URL; 
        }

        return $query[0]->innerHTML;

    }

    private function captureDate() {
        try {
            $query = $this->dom->find(NoticiaConstants::NEWS_DATE_SELECTOR);
        
            if(!isset($query[0])) {
                return Carbon::now();
            }

            $dateStr = $query[0]->innerHTML;
            $dateStr = str_replace('h', ':', $dateStr);

            $date = Carbon::createFromFormat("d/m/Y H:i", $dateStr);

            return $date;

        } catch(InvalidArgumentException $e) {
            return Carbon::now();

        }
    }

    /**
     * saveAllToDatabase() methods usage
    */

    private function saveToDatabase($noticia) {
        
        $model = $this->createNoticiaInstance();
        $model->fill($noticia);

        return $model->save();
    }

    /**
    * Helpers methods
    */

    private function existsNews($noticia) {
        $queryIfUnique = Noticia::where('link', $noticia->link)->get();

        if(!$queryIfUnique->isEmpty()) return true;

        return false;
    }

    private function getHtmlContents($link) {
        return file_get_contents($link);

    }

    private function xmlToJson($body) {
        $simpleXml = simplexml_load_string($body);

        return json_decode(json_encode($simpleXml));
    }

    private function createNoticiaInstance() {
        return new Noticia();
    }

}


?>