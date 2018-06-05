# Remove an Address

```php

use Railken\LaraOre\Address\AddressManager;

$manager = new AddressManager();

$resource = $manager->getRepository()->findOneById(1);

$result = $manager->remove($resource);
```