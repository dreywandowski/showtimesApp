<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\ShowTimesInterface;
use App\Repositories\ShowTimesRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ShowTimesInterface::class, ShowTimesRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
