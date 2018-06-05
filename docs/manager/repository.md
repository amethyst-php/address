# Address Repository

Getting repository instance

```php
use Railken\LaraOre\Address\AddressManager;

$manager = new AddressManager();

$repository = $manager->getRepository();

```

Retrieving an address

```php
use Railken\LaraOre\Address\AddressManager;

$manager = new AddressManager();

$resource = $manager->getRepository()->findOneBy(['id' => 1]);
$resource = $manager->getRepository()->findOneById(1);

```

Retrieving all addresses

```php
use Railken\LaraOre\Address\AddressManager;

$manager = new AddressManager();

$resources = $manager->getRepository()->findAll();
```

Performing a query using directly \Illuminate\DataBase\Eloquent\Builder

```php
use Railken\LaraOre\Address\AddressManager;

$manager = new AddressManager();

$resource = $manager->getRepository()->newQuery()->where('id', 1)->first();

```