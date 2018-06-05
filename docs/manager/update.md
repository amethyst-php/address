# Update an Address

```php
use Railken\LaraOre\Address\AddressManager;

$dm = new AddressManager();

$address = $dm->getRepository()->findOneById(1);

$result = $dm->update($address, [
    "city" => "Rome",
]);


```