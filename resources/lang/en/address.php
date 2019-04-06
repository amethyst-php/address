<?php

return [
    'name' => 'Address',
    'description' => 'The place where a person or organization can be found or communicated with.  Contains fields such as: street, postal code, city, country etc... Can be used for example as a shipment address or as an invoice address.',
    'attributes' => [
        'street' => [
            'label' => 'Street'
        ],
        'zip_code' => [
            'label' => 'Postal Code'
        ],
        'city' => [
            'label' => 'City'
        ],
        'province' => [
            'label' => 'Province'
        ],
        'country' => [
            'label' => 'Country'
        ]
    ]
];