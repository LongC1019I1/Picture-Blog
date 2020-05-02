<?php

namespace App\Providers;

use App\Contract\user\UsersRepositoryInterface;
use App\Contract\user\UsersServiceInterface;
use App\Http\Repository\UsersRepository;
use App\Http\Services\UsersService;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(UsersRepositoryInterface::class,UsersRepository::class);
        $this->app->singleton(UsersServiceInterface::class,UsersService::class);
    }
}
