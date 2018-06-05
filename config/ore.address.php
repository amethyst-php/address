<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Table
    |--------------------------------------------------------------------------
    |
    | This is the table used to save disks to the database
    |
    */
    'table' => 'ore_addresses',

    'router' => [
    	'prefix' => 'api/v1/admin',
    	'middlewares' => [
    		\Railken\LaraOre\RequestLoggerMiddleware::class,
    		 'auth:api',
    	]
    ]
];
