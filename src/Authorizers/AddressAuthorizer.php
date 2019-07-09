<?php

namespace Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class AddressAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'address.create',
        Tokens::PERMISSION_UPDATE => 'address.update',
        Tokens::PERMISSION_SHOW   => 'address.show',
        Tokens::PERMISSION_REMOVE => 'address.remove',
    ];
}
