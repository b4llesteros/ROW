<?php

namespace App\Providers;

use View;
// trae la libreria Agent
use Jenssegers\Agent\Agent;
use Illuminate\Support\ServiceProvider;

class AgentServiceProvider extends ServiceProvider
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
        //Crea variable e instancia el objeto Agent que viene de la librería Agent
        $agent = new Agent();
        //Comparte la variable $agent en toda la aplicación
        View::share('agent', $agent);
    }
}
