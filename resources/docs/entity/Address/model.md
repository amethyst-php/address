## Railken\Amethyst\Models\Address

The model extends ```Illuminate\Database\Eloquent\Model``` class.

#### Update the table name
You have to go in the file `configs/amethyst.address` in order to change the table name.

#### Extend the class

Create the new model in `app/Models/Address`
```php
namespace App\Models;

use Railken\Amethyst\Models\Address as Model;

class Address extends Model {
	// ...
}
```
Update the file `configs/amethyst.address` with the new class
```php
return [
    'data' => [
        'address' => [
            'model' => App\Models\Address::class,
        ],
    ]
];
```

---
[Back](index.md)