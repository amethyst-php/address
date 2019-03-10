## Railken\Amethyst\Authorizers\AddressAuthorizer

The authorizer is used during any operation that manipulate the data to check if the agent is authorized or not

#### Extend the class

Create the new authorizer in `app/Authorizers/AddressAuthorizer`
```php
namespace App\Authorizers;

use Railken\Amethyst\Authorizers\AddressAuthorizer as Authorizer;

class AddressAuthorizer extends Authorizer {
	// ...
}
```
Update the file `configs/amethyst.address` with the new class
```php
return [
    'data' => [
        'address' => [
            'authorizer' => App\Authorizers\AddressAuthorizer::class,
        ],
    ]
];
```

---
[Back](index.md)