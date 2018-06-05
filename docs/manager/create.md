# Create an Address

```php
use Railken\LaraOre\Address\AddressManager;

$dm = new AddressManager();

$result = $dm->create([
    "name" => "John Smith",
    "street" => "Via roma",
    "zip_code" => "00100",
    "city" => "Rome",
    "province" => "RM",
    "country" => "IT",
]);

```