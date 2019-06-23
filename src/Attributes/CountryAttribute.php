<?php

namespace Railken\Amethyst\Attributes;

use Railken\Lem\Attributes\EnumAttribute;
use Railken\Lem\Contracts\EntityContract;
use League\ISO3166\ISO3166;

class CountryAttribute extends EnumAttribute
{
    /**
     * Name attribute.
     *
     * @var string
     */
    protected $name = 'country';

    /**
     * Create a new instance.
     *
     * @param string $name
     * @param array  $options
     */
    public function __construct(string $name = null, array $options = [])
    {
        $options = array_map(function ($item) {
            return $item['alpha2'];
        }, (new ISO3166)->all());

        parent::__construct($name, $options);
    }

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
            (new ISO3166)->alpha2($value);

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
        return 'Enum';
    }
}
