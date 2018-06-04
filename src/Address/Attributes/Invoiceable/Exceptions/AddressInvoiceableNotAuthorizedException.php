<?php

namespace Railken\LaraOre\Address\Attributes\Invoiceable\Exceptions;

use Railken\LaraOre\Address\Exceptions\AddressAttributeException;

class AddressInvoiceableNotAuthorizedException extends AddressAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'invoiceable';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'ADDRESS_INVOICEABLE_NOT_AUTHTORIZED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = "You're not authorized to interact with %s, missing %s permission";
}
