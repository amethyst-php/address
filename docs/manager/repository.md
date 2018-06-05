# Address Repository

Getting repository instance

```php
use Railken\LaraOre\Address\AddressManager;

$manager = new AddressManager();

$repository = $manager->getRepository();

```

Retrieving an address

```php
$repository->findOneBy(['id' => 1]);
$repository->findOneById(1);

```

Retrieving all addresses

```php
$repository->findAll();
```

Performing a query using directly \Illuminate\DataBase\Eloquent\Builder

```php
$repository->newQuery()->where('id', 1)->first();

```