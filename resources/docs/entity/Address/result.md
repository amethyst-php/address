## Result

Once you've got the result you should always check if an error has occurred, if not, retrieve the resource.

```php
use Railken\Amethyst\Managers\AddressManager;

$manager = new AddressManager();

$result = $manager->create([
    "street" => "29671 Kling Station",
    "zip_code" => "78491",
    "city" => "Lake Saul",
    "province" => "PA",
    "country" => "US"
]);

if ($result->ok()) {

    $resource = $result->getResource();

} else {

    // Loop through all errors
    $result->getErrors()->map(function($error) {
        return $error->toArray();
    }))

    // Retrieve an array of all errors
    $result->getSimpleErrors();

    /* The result is something like this:

        [0] => Array
            (
                [code] => FIELD_NOT_DEFINED
                [label] => field
                [message] => The field is required
                [value] =>
            )
    */

}
```

---
[Back](index.md)