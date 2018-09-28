<?php

namespace Railken\Amethyst\Managers;

use Illuminate\Support\Facades\Config;
use Railken\Lem\Manager;

class AddressManager extends Manager
{
    /**
     * Describe this manager.
     *
     * @var string
     */
    public $comment = '...';

    /**
     * Register Classes.
     */
    public function registerClasses()
    {
        return Config::get('amethyst.address.managers.address');
    }
}
