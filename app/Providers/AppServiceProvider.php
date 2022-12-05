<?php

namespace App\Providers;

use App\Services\BlogService;
use App\Services\Impl\BlogServiceImpl;
use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BlogService::class,BlogServiceImpl::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        Passport::hashClientSecrets();
    }
}
