## Railken\Amethyst\Validators\AddressValidator

The validator is used during any operation that manipulate the data to check if the parameters are correct. Remember that each attribute has is own validation.

#### Extend the class

Create the new validator in `app/Validators/AddressValidator`
```php
namespace App\Validators;

use Railken\Amethyst\Validators\AddressValidator as Validator;

class AddressValidator extends Validator {
	// ...
}
```
Update the file `configs/amethyst.address` with the new class
```php
return [
    'data' => [
        'address' => [
            'validator' => App\Validators\AddressValidator::class,
        ],
    ]
];
```

---
[Back](index.md)