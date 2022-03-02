<?php

namespace App\Providers;

use App\Contracts\Admin\Auth\AuthInterface;
use App\Contracts\Admin\DashboardInterface;
use App\Repositories\Admin\Auth\AuthRepository;
use App\Repositories\Admin\DashboardRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(DashboardInterface::class, DashboardRepository::class);
        $this->app->bind(AuthInterface::class, AuthRepository::class);
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
