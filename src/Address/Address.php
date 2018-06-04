<?php

namespace Railken\LaraOre\Address;

use Illuminate\Database\Eloquent\Model;
use Railken\Laravel\Manager\Contracts\EntityContract;

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
    protected $fillable = ['name', 'street', 'city', 'province', 'zip_code', 'country', 'invoiceable'];


    /**
     * The attributes that need a cast
     *
     * @var array
     */
    protected $cast = ['invoiceable' => 'boolean'];

    /**
     * Creates a new instance of the model.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = \Illuminate\Support\Facades\Config::get('ore.address.table');
    }
}
