<?php

namespace Railken\LaraOre\Address;

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
    public $entity = Address::class;

    /**
     * List of all attributes.
     *
     * @var array
     */
    protected $attributes = [
        Attributes\Id\IdAttribute::class,
        Attributes\Country\CountryAttribute::class,
        Attributes\City\CityAttribute::class,
        Attributes\Street\StreetAttribute::class,
        Attributes\ZipCode\ZipCodeAttribute::class,
        Attributes\Province\ProvinceAttribute::class,
        Attributes\CreatedAt\CreatedAtAttribute::class,
        Attributes\UpdatedAt\UpdatedAtAttribute::class,
        Attributes\Name\NameAttribute::class,
        Attributes\Invoiceable\InvoiceableAttribute::class,
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
        $this->setRepository(new AddressRepository($this));
        $this->setSerializer(new AddressSerializer($this));
        $this->setAuthorizer(new AddressAuthorizer($this));
        $this->setValidator(new AddressValidator($this));

        parent::__construct($agent);
    }
}
