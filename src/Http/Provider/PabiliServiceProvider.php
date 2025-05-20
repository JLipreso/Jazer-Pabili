<?php

namespace Jazer\Pabili\Http\Provider;

use Illuminate\Support\ServiceProvider;

class PabiliServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../../config/database.php', 'pabili'  
        );
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../../../config/config.php' => config_path('pabiliconfig.php')
        ], 'pabiliconfig-config');
        
        $this->loadRoutesFrom( __DIR__ . '/../../../routes/api.php');

        config(['database.connections.conn_pabili' => config('pabili.database_connection')]);
    }
}
