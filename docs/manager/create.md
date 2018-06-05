# Create an Address

Create an Address

```php
use Railken\LaraOre\Address\AddressManager;
use Illuminate\Support\Facades\Storage;

$dm = new AddressManager();

$result = $dm->create([
    "name" => "John Smith",
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