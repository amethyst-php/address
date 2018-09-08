<?php

namespace Railken\LaraOre\Http\Controllers\Admin;

use Railken\LaraOre\Api\Http\Controllers\RestConfigurableController;
use Railken\LaraOre\Api\Http\Controllers\Traits as RestTraits;

class AddressesController extends RestConfigurableController
{
    use RestTraits\RestIndexTrait;
    use RestTraits\RestCreateTrait;
    use RestTraits\RestUpdateTrait;
    use RestTraits\RestShowTrait;
    use RestTraits\RestRemoveTrait;

    /**
     * The config path.
     *
     * @var string
     */
    public $config = 'ore.address';

    /**
     * The attributes that are queryable.
     *
     * @var array
     */
    public $queryable = [
        'id',
        'name',
        'street',
        'zip_code',
        'city',
        'province',
        'country',
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that are fillable.
     *
     * @var array
     */
    public $fillable = [
        'name',
        'street',
        'zip_code',
        'city',
        'province',
        'country',
    ];
}
