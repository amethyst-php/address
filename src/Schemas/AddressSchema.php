<?php

namespace Amethyst\Schemas;

use Amethyst\Attributes as AmethystAttributes;
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
            AmethystAttributes\CountryAttribute::make()
                ->setRequired(true),
            AmethystAttributes\ZipCodeAttribute::make()
                ->setRequired(true),
            Attributes\TextAttribute::make('street')
                ->setRequired(true),
            Attributes\TextAttribute::make('province')
                ->setRequired(true),
            Attributes\TextAttribute::make('city')
                ->setRequired(true),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
