# Create an Address

```php
use Railken\LaraOre\Address\AddressManager;

$manager = new AddressManager();

$result = $manager->create([
    "name" => "John Smith",
    "street" => "Via roma",
    "zip_code" => "00100",
    "city" => "Rome",
    "province" => "RM",
    "country" => "IT",
]);

```