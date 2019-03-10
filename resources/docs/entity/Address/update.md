## Update 


Define a new instance of the [Manager](manager.md)

```php
use Railken\Amethyst\Managers\AddressManager;

$manager = new AddressManager();
```

Retrieve an [entity](model.md) using the [repository](repository.md)


```php
$entity = $manager->getRepository()->findOneById(1);
```

Update an existent [entity](model.md)

```php
$params = [
    "street" => "29671 Kling Station",
    "zip_code" => "78491",
    "city" => "Lake Saul",
    "province" => "PA",
    "country" => "US"
];

$result = $manager->update($params);
```

* [Attributes](attributes.md)
* [Errors](errors.md)
* [Performing queries with the Repository](repository.md)
* [Handle the result](result.md)

---
[Back](index.md)