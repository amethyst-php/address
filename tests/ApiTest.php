<?php

namespace Railken\LaraOre\Address\Tests;

use Illuminate\Support\Facades\Config;
use Railken\LaraOre\Address\AddressFaker;
use Railken\LaraOre\Api\Support\Testing\TestableTrait;

class ApiTest extends BaseTest
{
    use TestableTrait;

    /**
     * Retrieve basic url.
     *
     * @return string
     */
    public function getBaseUrl()
    {
        return Config::get('ore.api.http.admin.router.prefix').Config::get('ore.address.http.admin.router.prefix');
    }

    /**
     * Test common requests.
     */
    public function testSuccessCommon()
    {
        $this->commonTest($this->getBaseUrl(), AddressFaker::make()->parameters());
    }
}
