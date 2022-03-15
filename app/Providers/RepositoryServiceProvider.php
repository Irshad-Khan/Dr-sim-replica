<?php

namespace App\Providers;

use App\Contracts\Admin\Auth\AuthInterface;
use App\Contracts\Admin\CountryInterface;
use App\Contracts\Admin\CustomerInterface;
use App\Contracts\Admin\DashboardInterface;
use App\Contracts\Admin\MobileBrandInterface;
use App\Contracts\Admin\MobileModelInterface;
use App\Contracts\Admin\NetworkProviderInterface;
use App\Contracts\Admin\ServiceInterface;
use App\Repositories\Admin\Auth\AuthRepository;
use App\Repositories\Admin\CountryRepository;
use App\Repositories\Admin\CustomerRepository;
use App\Repositories\Admin\DashboardRepository;
use App\Repositories\Admin\MobileBrandRepository;
use App\Repositories\Admin\MobileModelRepository;
use App\Repositories\Admin\NetworkProviderRepository;
use App\Repositories\Admin\ServiceRepository;
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
        $this->app->bind(CustomerInterface::class, CustomerRepository::class);
        $this->app->bind(CountryInterface::class, CountryRepository::class);
        $this->app->bind(NetworkProviderInterface::class, NetworkProviderRepository::class);
        $this->app->bind(MobileBrandInterface::class, MobileBrandRepository::class);
        $this->app->bind(MobileModelInterface::class, MobileModelRepository::class);
        $this->app->bind(ServiceInterface::class, ServiceRepository::class);
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
