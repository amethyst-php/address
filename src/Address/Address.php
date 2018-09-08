<?php

namespace Railken\LaraOre\Address;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;
use Railken\Laravel\Manager\Contracts\EntityContract;

/**
 * @property string $name
 * @property string $street
 * @property string $city
 * @property string $province
 * @property string $zip_code
 * @property string $country
 */
class Address extends Model implements EntityContract
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'street',
        'city',
        'province',
        'zip_code',
        'country',
    ];

    /**
     * Creates a new instance of the model.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = Config::get('ore.address.table');
        $this->fillable = array_merge($this->fillable, array_keys(Config::get('ore.address.attributes')));
    }
}
