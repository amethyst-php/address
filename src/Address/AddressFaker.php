<?php

namespace Railken\LaraOre\Address;

use Faker\Factory;
use Railken\Bag;
use Railken\Laravel\Manager\BaseFaker;

class AddressFaker extends BaseFaker
{
    /**
     * @var string
     */
    protected $manager = AddressManager::class;

    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('name', $faker->name);
        $bag->set('street', $faker->streetAddress);
        $bag->set('zip_code', $faker->postcode);
        $bag->set('city', $faker->city);
        $bag->set('province', $faker->stateAbbr);
        $bag->set('country', 'US');

        return $bag;
    }
}
