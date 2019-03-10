## Create

Define a new instance of the [Manager](manager.md)

```php
use Railken\Amethyst\Managers\AddressManager;

$manager = new AddressManager();
```

Create a new [entity](model.md)

```php
$params = [
    "street" => "29671 Kling Station",
    "zip_code" => "78491",
    "city" => "Lake Saul",
    "province" => "PA",
    "country" => "US"
];

$result = $manager->create($params);
```

Check the result of the operation

```php
if ($result->ok()) {
    // All ok
} else {
    // Something goes wrong
}
```

Retrieve the [entity](model.md) from the [result](result.md)

```php
$entity = $result->getResource();
```

Throw an exception immediately if the operation fails

```php
use Railken\Lem\Exceptions\Exception;

$params = [
    "street" => "29671 Kling Station",
    "zip_code" => "78491",
    "city" => "Lake Saul",
    "province" => "PA",
    "country" => "US"
];
   
try {
    $result = $manager->createOrFail($params);
} catch (Exception $e) {
    // ...
}
```

### Links
* [Attributes](attributes.md)
* [Errors](errors.md)
* [Handle the result](result.md)

---
[Back](index.md)