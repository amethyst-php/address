## Railken\Amethyst\Managers\AddressManager

The manager is the main class to access and manipulate your model.

Why use the manager instead of the model? Because the manager handle all the boring stuff like validation and authorization for you.
Remember that the manager return always a [Result](result.md).

* [Create a new entity](create.md)
* [Update an entity](update.md)
* [Remove an entity](remove.md)
* [Performing queries with the Repository](repository.md)
* [Handle the result](result.md)
* [Authorization](authorization.md)
* [Attributes](attributes.md)
* [Errors](errors.md)
* [Permissions](permissions.md)


#### Extend the class

Create the new manager in `app/Managers/AddressManager`
```php
namespace App\Managers;

use Railken\Amethyst\Managers\AddressManager as Manager;

class AddressManager extends Manager {
	// ...
}
```
Update the file `configs/amethyst.address` with the new class
```php
return [
    'data' => [
        'address' => [
            'manager' => App\Managers\AddressManager::class,
        ],
    ]
];
```

---
[Back](index.md)