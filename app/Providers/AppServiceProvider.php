<?php

namespace App\Providers;

use App\Repositories\CustomerRepositoryInterface;
use App\Repositories\Eloquent\CustomerRepositoryEloquentImpl;
use App\Services\CustomerServiceInterface;
use App\Services\Impl\CustomerServiceImpl;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(CustomerServiceInterface::class, CustomerServiceImpl::class);
        $this->app->singleton(CustomerRepositoryInterface::class, CustomerRepositoryEloquentImpl::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
