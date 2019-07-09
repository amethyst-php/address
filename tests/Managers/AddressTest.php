<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\AddressFaker;
use Amethyst\Managers\AddressManager;
use Amethyst\Tests\BaseTest;
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
