## Railken\Amethyst\Repositories\AddressRepository

The repository is the class to perform queries.

```php
use Railken\Amethyst\Managers\AddressManager;

$manager = new AddressManager();

$repository = $manager->getRepository();

```

Retrieving an entity

```php
$repository->findOneBy(['id' => 1]);
$repository->findOneById(1);

```

Retrieving all entities

```php
$repository->findAll();
```

Performing a query using \Illuminate\DataBase\Eloquent\Builder

```php
$repository->newQuery()->where('id', 1)->first();

```

#### Extend the class

Create the new repository in `app/Repositories/AddressRepository`
```php
namespace App\Repositories;

use Railken\Amethyst\Repositories\AddressRepository as Repository;

class AddressRepository extends Repository {
	// ...
}
```
Update the file `configs/amethyst.address` with the new class
```php
return [
    'data' => [
        'address' => [
            'repository' => App\Repositories\AddressRepository::class,
        ],
    ]
];
```

---
[Back](index.md)