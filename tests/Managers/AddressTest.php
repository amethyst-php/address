<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\AddressFaker;
use Railken\Amethyst\Managers\AddressManager;
use Railken\Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class AddressTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = AddressManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = AddressFaker::class;
}
