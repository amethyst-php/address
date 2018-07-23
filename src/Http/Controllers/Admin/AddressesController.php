<?php

namespace Railken\LaraOre\Http\Controllers\Admin;

use Railken\LaraOre\Address\AddressManager;
use Railken\LaraOre\Api\Http\Controllers\RestController;
use Railken\LaraOre\Api\Http\Controllers\Traits as RestTraits;

class AddressesController extends RestController
{
    use RestTraits\RestIndexTrait;
    use RestTraits\RestCreateTrait;
    use RestTraits\RestUpdateTrait;
    use RestTraits\RestShowTrait;
    use RestTraits\RestRemoveTrait;

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

    public $fillable = [
        'name',
        'street',
        'zip_code',
        'city',
        'province',
        'country',
    ];

    /**
     * Construct.
     */
    public function __construct(AddressManager $manager)
    {
        $this->manager = $manager;
        $this->manager->setAgent($this->getUser());
        parent::__construct();
    }

    /**
     * Create a new instance for query.
     *
     * @return \Illuminate\Database\Query\Builder
     */
    public function getQuery()
    {
        return $this->manager->repository->getQuery();
    }
}
