## Railken\Amethyst\Schemas\AddressSchema

The schema is used to define the structure of the attributes. All the $attributes in the [model](model.md) and in the [manager](manager.md) are initialized by the schema.

#### Extend the class

Create the new schema in `app/Schemas/AddressSchema`
```php
namespace App\Schemas;

use Railken\Amethyst\Schemas\AddressSchema as Schema;

class AddressSchema extends Schema {
	// ...
}
```
Update the file `configs/amethyst.address` with the new class
```php
return [
    'data' => [
        'address' => [
            'schema' => App\Schemas\AddressSchema::class,
        ],
    ]
];
```

---
[Back](index.md)