## Railken\Amethyst\Serializers\AddressSerializer

The serializer is used to serialize an entity, you can retrieve it from the data.

```php
use Railken\Amethyst\Managers\AddressManager;

$manager = new AddressManager();

$serializer = $manager->getSerializer();

```

And use it so serialize an entity
Retrieving an entity

```php
$entity = $repository->findOneById(1);
$serializer->serialize($entity)->toArray(); // Returns an array

```
#### Extend the class

Create the new serializer in `app/Serializers/AddressSerializer`
```php
namespace App\Serializers;

use Railken\Amethyst\Serializers\AddressSerializer as Serializer;

class AddressSerializer extends Serializer {
	// ...
}
```
Update the file `configs/amethyst.address` with the new class
```php
return [
    'data' => [
        'address' => [
            'serializer' => App\Serializers\AddressSerializer::class,
        ],
    ]
];
```

---
[Back](index.md)