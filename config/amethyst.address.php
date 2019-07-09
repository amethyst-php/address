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
            'model'      => Amethyst\Models\Address::class,
            'schema'     => Amethyst\Schemas\AddressSchema::class,
            'repository' => Amethyst\Repositories\AddressRepository::class,
            'serializer' => Amethyst\Serializers\AddressSerializer::class,
            'validator'  => Amethyst\Validators\AddressValidator::class,
            'authorizer' => Amethyst\Authorizers\AddressAuthorizer::class,
            'faker'      => Amethyst\Fakers\AddressFaker::class,
            'manager'    => Amethyst\Managers\AddressManager::class,
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
                'controller' => Amethyst\Http\Controllers\Admin\AddressesController::class,
                'router'     => [
                    'as'     => 'address.',
                    'prefix' => '/addresses',
                ],
            ],
        ],
    ],
];
