<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Noticias\Contracts\INoticiaRepository;
use App\Repositories\Noticias\NoticiaRepository;

class RepositoryServiceProvider extends ServiceProvider
{

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        $this->app->bind(INoticiaRepository::class, NoticiaRepository::class);

    }
}
