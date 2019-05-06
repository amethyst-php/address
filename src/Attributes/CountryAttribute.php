<?php

namespace Railken\Amethyst\Attributes;

use Railken\Lem\Attributes\TextAttribute;
use Railken\Lem\Contracts\EntityContract;

class CountryAttribute extends TextAttribute
{
    /**
     * Name attribute.
     *
     * @var string
     */
    protected $name = 'country';

    /**
     * Is a value valid ?
     *
     * @param EntityContract $entity
     * @param mixed          $value
     *
     * @return bool
     */
    public function valid(EntityContract $entity, $value)
    {
        try {
            (new \League\ISO3166\ISO3166())->alpha2($value);

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Get type.
     *
     * @return string
     */
    public function getType()
    {
        return 'Text';
    }

}
