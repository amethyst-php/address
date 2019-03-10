## Permissions

If you want to handle permissions, add a new parameter when you're creating a new instance of the manager: simply add the user.

The $user class needs to implement the interface Railken\Lem\Contracts\AgentContract;

```php
namespace Railken\Lem\Contracts;

interface AgentContract
{
    /**
     * @param string      $ability
     * @param array|mixed $arguments
     *
     * @return bool
     */
    public function can($ability, $arguments = []);
}
```

You can use whatever permission-library suits you to implement this method

```php
use Railken\Amethyst\Managers\AddressManager;

$manager = new AddressManager($user);

```

Now, when performing actions, the $result may contains permissions errors such as *_NOT_AUTHORIZED*

### Links
* [Errors](errors.md)
* [Handle the result](result.md)

---
[Back](index.md)