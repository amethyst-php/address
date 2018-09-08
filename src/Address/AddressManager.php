<?php

namespace Railken\LaraOre\Address;

use Illuminate\Support\Facades\Config;
use Railken\Laravel\Manager\Contracts\AgentContract;
use Railken\Laravel\Manager\ModelManager;
use Railken\Laravel\Manager\Tokens;

class AddressManager extends ModelManager
{
    /**
     * Class name entity.
     *
     * @var string
     */
    public $entity;

    /**
     * List of all attributes.
     *
     * @var array
     */
    protected $attributes = [
        Attributes\Id\IdAttribute::class,
        Attributes\Name\NameAttribute::class,
        Attributes\Country\CountryAttribute::class,
        Attributes\City\CityAttribute::class,
        Attributes\Street\StreetAttribute::class,
        Attributes\ZipCode\ZipCodeAttribute::class,
        Attributes\Province\ProvinceAttribute::class,
        Attributes\CreatedAt\CreatedAtAttribute::class,
        Attributes\UpdatedAt\UpdatedAtAttribute::class,
    ];

    /**
     * List of all exceptions.
     *
     * @var array
     */
    protected $exceptions = [
        Tokens::NOT_AUTHORIZED => Exceptions\AddressNotAuthorizedException::class,
    ];

    /**
     * Construct.
     *
     * @param AgentContract $agent
     */
    public function __construct(AgentContract $agent = null)
    {
        $this->entity = Config::get('ore.address.entity');
        $this->attributes = array_merge($this->attributes, array_values(Config::get('ore.address.attributes')));

        $classRepository = Config::get('ore.address.repository');
        $this->setRepository(new $classRepository($this));

        $classSerializer = Config::get('ore.address.serializer');
        $this->setSerializer(new $classSerializer($this));

        $classAuthorizer = Config::get('ore.address.authorizer');
        $this->setAuthorizer(new $classAuthorizer($this));

        $classValidator = Config::get('ore.address.validator');
        $this->setValidator(new $classValidator($this));

        parent::__construct($agent);
    }
}
