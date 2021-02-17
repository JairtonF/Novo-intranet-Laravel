<?php

namespace App\Console\Commands;

use App\Services\Noticias\NoticiaService;
use Illuminate\Console\Command;

class NoticiaStart extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'noticia:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando para iniciar a automatização de captura de notícias do IFCE Campus Maracanaú.';

    private $noticiaService;

    public function __construct(NoticiaService $noticiaService)
    {
        parent::__construct();
        $this->noticiaService = $noticiaService;

    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->noticiaService->start();
        
    }
}
