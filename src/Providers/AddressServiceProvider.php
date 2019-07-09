<?php

namespace Amethyst\Providers;

use Amethyst\Common\CommonServiceProvider;

class AddressServiceProvider extends CommonServiceProvider
{
    /**
     * @inherit
     */
    public function register()
    {
        parent::register();

        $this->app->register(\Amethyst\Providers\GeolocationServiceProvider::class);
    }

    /**
     * @inherit
     */
    public function boot()
    {
        parent::boot();

        app('amethyst')->pushMorphRelation('geolocation-point', 'localizable', 'address');
    }
}
