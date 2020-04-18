<?php

namespace App\Providers;

use App\Contract\user\UsersRepositoryInterface;
use App\Contract\user\UsersServiceInterface;
use App\Http\Repository\UsersRepository;
use App\Http\Service\UsersService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot(UrlGenerator $url)
    {
        if(env('REDIRECT_HTTPS')) {
            $url->formatScheme('https');
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if(env('REDIRECT_HTTPS')) {
            $this->app['request']->server->set('HTTPS', true);
        }
    }
}
