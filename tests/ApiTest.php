<?php

namespace Railken\LaraOre\Address\Tests;

use Railken\LaraOre\Support\Testing\ApiTestableTrait;
use Illuminate\Support\Facades\Config;
use Railken\LaraOre\Address\AddressFaker;

class ApiTest extends BaseTest
{
    use ApiTestableTrait;

    /**
     * Retrieve basic url.
     *
     * @return string
     */
    public function getBaseUrl()
    {
        return Config::get('ore.api.router.prefix').Config::get('ore.address.router.prefix');
    }

    /**
     * Test common requests.
     *
     * @return void
     */
    public function testSuccessCommon()
    {
        $this->commonTest($this->getBaseUrl(), AddressFaker::make()->parameters());
    }
}
