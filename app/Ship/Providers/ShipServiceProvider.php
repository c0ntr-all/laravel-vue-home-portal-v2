<?php

namespace App\Ship\Providers;

use App\Containers\Authentication\Providers\AuthServiceProvider;
use App\Containers\Authentication\Providers\JwtServiceProvider;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;

class ShipServiceProvider extends ServiceProvider
{
    private array $serviceProviders = [
        RouteServiceProvider::class,
        MigrationServiceProvider::class,
        AuthServiceProvider::class,
        JwtServiceProvider::class,
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
        foreach ($this->serviceProviders ?? [] as $provider) {
            if (class_exists($provider)) {
                App::register($provider);
            }
        }

        JsonResource::withoutWrapping();
        Passport::ignoreRoutes();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
