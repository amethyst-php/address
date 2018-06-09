<?php

namespace Railken\LaraOre\Address;

use Illuminate\Support\Collection;
use Railken\Laravel\Manager\Contracts\EntityContract;
use Railken\Laravel\Manager\ModelSerializer;

class AddressSerializer extends ModelSerializer
{
    /**
     * Serialize entity.
     *
     * @param EntityContract $entity
     * @param Collection     $select
     *
     * @return array
     */
    public function serialize(EntityContract $entity, Collection $select = null)
    {
        $bag = parent::serialize($entity, $select);

        $bag->set('readable', $bag->get('street').' '.$bag->get('city').' ('.$bag->get('zip_code').') '.$bag->get('province'));

        return $bag;
    }
}
