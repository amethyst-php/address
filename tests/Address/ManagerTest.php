<?php

namespace Railken\LaraOre\Tests\Address;

use Railken\LaraOre\Address\AddressFaker;
use Railken\LaraOre\Address\AddressManager;
use Railken\LaraOre\Support\Testing\ManagerTestableTrait;

class ManagerTest extends BaseTest
{
    use ManagerTestableTrait;

    /**
     * Retrieve basic url.
     *
     * @return \Railken\Laravel\Manager\Contracts\ManagerContract
     */
    public function getManager()
    {
        return new AddressManager();
    }

    public function testSuccessCommon()
    {
        $this->commonTest($this->getManager(), AddressFaker::make()->parameters());
    }
}
