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
