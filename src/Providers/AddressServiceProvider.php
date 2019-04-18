<?php

namespace Railken\Amethyst\Providers;

use Railken\Amethyst\Common\CommonServiceProvider;

class AddressServiceProvider extends CommonServiceProvider
{
    /**
     * @inherit
     */
    public function register()
    {
        parent::register();

        $this->app->register(\Railken\Amethyst\Providers\GeolocationServiceProvider::class);

        app('amethyst')->pushMorphRelation('geolocation-point', 'localizable', 'address');
    }
}
