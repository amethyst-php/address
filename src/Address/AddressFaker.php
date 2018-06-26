<?php

namespace Railken\LaraOre\Address;

use Railken\Bag;
use Faker\Factory;

class AddressFaker
{
    /**
     * @return array
     */
    public static function make()
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
