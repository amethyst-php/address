<?php

namespace Railken\LaraOre\Address\Attributes\Name\Exceptions;

use Railken\LaraOre\Address\Exceptions\AddressAttributeException;

class AddressNameNotUniqueException extends AddressAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'name';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'ADDRESS_NAME_NOT_UNIQUE';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not unique';
}
