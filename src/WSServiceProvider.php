<?php

namespace AndreiBu\php_websocket_client;

use Illuminate\Support\ServiceProvider;

class WSServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     */
    public function boot()
    {
        $app = $this->app;

        $this->bootConfig();
        
    }

    /**
     * Booting configure.
     */
    protected function bootConfig()
    {
        $path = __DIR__.'/config/php_ws.php';

        $this->mergeConfigFrom($path, 'php_ws');

        if (function_exists('config_path')) {
            $this->publishes([$path => config_path('php_ws.php')]);
        }
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->bind('PHP_WS', function ($app) {
            return new PHP_WS($app['config']['php_ws']);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['PHP_WS'];
    }
    
    
      
    
}
