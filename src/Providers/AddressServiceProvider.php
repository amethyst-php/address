<?php

namespace Railken\Amethyst\Providers;

use Illuminate\Support\Facades\Config;
use Railken\Amethyst\Common\CommonServiceProvider;
use Railken\Amethyst\Managers\AddressManager;
use Railken\Amethyst\Models\Address;

class AddressServiceProvider extends CommonServiceProvider
{
    /**
     * @inherit
     */
    public function register()
    {
        parent::register();

        Config::set('amethyst.geolocation.data.geolocation-point.attributes.localizable.options.'.Address::class, AddressManager::class);
    }
}
