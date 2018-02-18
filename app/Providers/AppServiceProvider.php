<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Kodinger\Sim\Sim1;
use App\Kodinger\Sim\Sim2;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->when('App\Kodinger\Smartphone')
                  ->needs('App\Kodinger\Sim\Sim')
                  ->give(Sim1::class);

        $this->app->when('App\Kodinger\Smartphone2')
                  ->needs('App\Kodinger\Sim\Sim')
                  ->give(Sim2::class);

        // Akan di eksekusi apabila App\Kodinger\Sim\Sim di-resolve
        $this->app->resolving('App\Kodinger\Sim\Sim', function($object, $app) {
            \Log::info('resolving sim!');
        });

        // Akan di eksekusi apabila terjadi proses resolving
        $this->app->resolving(function($object, $app) {
            // kode yang akan di eksekusi
        });
    }
}
