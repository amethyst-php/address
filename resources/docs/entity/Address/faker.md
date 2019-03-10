## Railken\Amethyst\Fakers\AddressFaker

The faker can be used for testing or seeding.

Create a new entity using the faker

```php
use Railken\Amethyst\Fakers\AddressFaker;

$result = $manager->create(AddressFaker::make()->parameters());
```

#### Extend the class

Create the new faker in `app/Fakers/AddressFaker`
```php
namespace App\Fakers;

use Railken\Amethyst\Fakers\AddressFaker as Faker;

class AddressFaker extends Faker {
	// ...
}
```
Update the file `configs/amethyst.address` with the new class
```php
return [
    'data' => [
        'address' => [
            'faker' => App\Fakers\AddressFaker::class,
        ],
    ]
];
```


---
[Back](index.md)