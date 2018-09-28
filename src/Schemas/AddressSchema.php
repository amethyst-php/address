<?php

namespace Railken\Amethyst\Schemas;

use Railken\Amethyst\Attributes as AmethystAttributes;
use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class AddressSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make(),
            Attributes\TextAttribute::make('name'),
            AmethystAttributes\CountryAttribute::make(),
            AmethystAttributes\ZipCodeAttribute::make(),
            Attributes\TextAttribute::make('street'),
            Attributes\TextAttribute::make('province'),
            Attributes\TextAttribute::make('city'),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
