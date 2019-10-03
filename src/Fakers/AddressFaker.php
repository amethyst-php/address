<?php

namespace Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;

class AddressFaker extends Faker
{
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
