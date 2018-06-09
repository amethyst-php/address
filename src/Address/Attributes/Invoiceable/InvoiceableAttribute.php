<?php

namespace Railken\LaraOre\Address\Attributes\Invoiceable;

use Railken\Laravel\Manager\Attributes\BaseAttribute;
use Railken\Laravel\Manager\Contracts\EntityContract;
use Railken\Laravel\Manager\Tokens;

class InvoiceableAttribute extends BaseAttribute
{
    /**
     * Name attribute.
     *
     * @var string
     */
    protected $name = 'invoiceable';

    /**
     * Is the attribute required
     * This will throw not_defined exception for non defined value and non existent model.
     *
     * @var bool
     */
    protected $required = false;

    /**
     * Is the attribute unique.
     *
     * @var bool
     */
    protected $unique = false;

    /**
     * List of all exceptions used in validation.
     *
     * @var array
     */
    protected $exceptions = [
        Tokens::NOT_DEFINED    => Exceptions\AddressInvoiceableNotDefinedException::class,
        Tokens::NOT_VALID      => Exceptions\AddressInvoiceableNotValidException::class,
        Tokens::NOT_AUTHORIZED => Exceptions\AddressInvoiceableNotAuthorizedException::class,
    ];

    /**
     * List of all permissions.
     */
    protected $permissions = [
        Tokens::PERMISSION_FILL => 'address.attributes.invoiceable.fill',
        Tokens::PERMISSION_SHOW => 'address.attributes.invoiceable.show',
    ];

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
        return $value === 1 || $value === 0 || $value === true || $value === false;
    }
}
