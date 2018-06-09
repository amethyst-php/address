<?php

namespace Railken\LaraOre;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;
use Railken\LaraOre\Api\Support\Router;

class AddressServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/ore.address.php' => config_path('ore.address.php'),
        ], 'config');

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutes();

        config(['ore.user.permission.managers' => array_merge(Config::get('ore.user.permission.managers'), [
            \Railken\LaraOre\Address\AddressManager::class,
        ])]);
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(\Railken\Laravel\Manager\ManagerServiceProvider::class);
        $this->app->register(\Railken\LaraOre\ApiServiceProvider::class);
        $this->app->register(\Railken\LaraOre\UserServiceProvider::class);

        $this->mergeConfigFrom(__DIR__.'/../config/ore.address.php', 'ore.address');
    }

    /**
     * Load routes.
     *
     * @return void
     */
    public function loadRoutes()
    {
        Router::group(array_merge(Config::get('ore.address.router'), [
            'namespace' => 'Railken\LaraOre\Http\Controllers',
        ]), function ($router) {
            $router->get('/', ['uses' => 'AddressesController@index']);
            $router->post('/', ['uses' => 'AddressesController@create']);
            $router->put('/{id}', ['uses' => 'AddressesController@update']);
            $router->delete('/{id}', ['uses' => 'AddressesController@remove']);
            $router->get('/{id}', ['uses' => 'AddressesController@show']);
        });
    }
}
