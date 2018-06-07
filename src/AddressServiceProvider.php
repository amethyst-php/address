<?php

namespace Railken\LaraOre;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;

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
        Route::group([
            'namespace' => 'Railken\LaraOre\Http\Controllers',
            'prefix' => '/api/v1',
        ], function ($router) {
            Route::group([
                'prefix' => '/admin/addresses',
                'middleware' => Config::get('ore.user.router.middlewares'),
            ], function ($router) {
                $router->get('/', ['uses' => 'AddressesController@index']);
                $router->post('/', ['uses' => 'AddressesController@create']);
                $router->put('/{id}', ['uses' => 'AddressesController@update']);
                $router->delete('/{id}', ['uses' => 'AddressesController@remove']);
                $router->get('/{id}', ['uses' => 'AddressesController@show']);
            });
        });
    }
}
