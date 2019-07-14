<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Address                 newEntity()
 * @method \Amethyst\Schemas\AddressSchema          getSchema()
 * @method \Amethyst\Repositories\AddressRepository getRepository()
 * @method \Amethyst\Serializers\AddressSerializer  getSerializer()
 * @method \Amethyst\Validators\AddressValidator    getValidator()
 * @method \Amethyst\Authorizers\AddressAuthorizer  getAuthorizer()
 */
class AddressManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.address.data.address';
}
