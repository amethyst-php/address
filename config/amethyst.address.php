<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Data
    |--------------------------------------------------------------------------
    |
    | Here you can change the table name and the class components.
    | used by each manager.
    |
    */
    'data' => [
        'address' => [
            'table'      => 'amethyst_addresses',
            'comment'    => 'Address',
            'model'      => Railken\Amethyst\Models\Address::class,
            'schema'     => Railken\Amethyst\Schemas\AddressSchema::class,
            'repository' => Railken\Amethyst\Repositories\AddressRepository::class,
            'serializer' => Railken\Amethyst\Serializers\AddressSerializer::class,
            'validator'  => Railken\Amethyst\Validators\AddressValidator::class,
            'authorizer' => Railken\Amethyst\Authorizers\AddressAuthorizer::class,
            'faker'      => Railken\Amethyst\Fakers\AddressFaker::class,
            'manager'    => Railken\Amethyst\Managers\AddressManager::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Http configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure the routes
    |
    */
    'http' => [
        'admin' => [
            'address' => [
                'enabled'    => true,
                'controller' => Railken\Amethyst\Http\Controllers\Admin\AddressesController::class,
                'router'     => [
                    'as'     => 'address.',
                    'prefix' => '/addresses',
                ],
            ],
        ],
    ],
];
