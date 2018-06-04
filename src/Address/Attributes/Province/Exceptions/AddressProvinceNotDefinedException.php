<?php

namespace Railken\LaraOre\Address\Attributes\Province\Exceptions;

use Railken\LaraOre\Address\Exceptions\AddressAttributeException;

class AddressProvinceNotDefinedException extends AddressAttributeException
{

    /**
     * The reason (attribute) for which this exception is thrown
     *
     * @var string
     */
    protected $attribute = 'province';

    /**
     * The code to identify the error
     *
     * @var string
     */
    protected $code = 'ADDRESS_PROVINCE_NOT_DEFINED';

    /**
     * The message
     *
     * @var string
     */
    protected $message = "The %s is required";
}
