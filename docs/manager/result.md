# Result

Once you've got the result you should always check if an error has occurred, if not, retrieve the resource.

```php

use Railken\LaraOre\Address\AddressManager;

$manager = new AddressManager();

$result = $manager->create([
    "street" => "Via roma",
    "zip_code" => "00100",
    "city" => "Rome",
    "province" => "RM",
    "country" => "IT",
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
                [code] => ADDRESS_NAME_NOT_DEFINED
                [label] => name
                [message] => The name is required
                [value] =>
            )
    */

}
```