<?php

namespace Railken\LaraOre\Tests\Address;

use Illuminate\Support\Facades\Config;
use Railken\LaraOre\Address\AddressFaker;
use Railken\LaraOre\Api\Support\Testing\TestableBaseTrait;

class ApiTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = AddressFaker::class;

    /**
     * Router group resource.
     *
     * @var string
     */
    protected $group = 'admin';

    /**
     * Base path config.
     *
     * @var string
     */
    protected $config = 'ore.address';
}
