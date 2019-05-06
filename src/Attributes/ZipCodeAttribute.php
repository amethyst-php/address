<?php

namespace Railken\Amethyst\Attributes;

use IsoCodes\ZipCode;
use Railken\Lem\Attributes\TextAttribute;
use Railken\Lem\Contracts\EntityContract;

class ZipCodeAttribute extends TextAttribute
{
    /**
     * Name attribute.
     *
     * @var string
     */
    protected $name = 'zip_code';

    /**
     * Is a value valid ?
     *
     * @param \Railken\Amethyst\Models\Address $entity
     * @param mixed                            $value
     *
     * @return bool
     */
    public function valid(EntityContract $entity, $value)
    {
        try {
            return ZipCode::validate($value, $entity->country);
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
