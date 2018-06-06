# Create Address

**URL** : `/api/v1/admin/addresses`

**Method** : `POST`

**Auth required** : YES 

**Permissions required** : address.create

**Data example**

```json
{
    "name": "John Smith",
    "street": "Via roma",
    "zip_code": "00100",
    "city": "Rome",
    "province": "RM",
    "country": "IT",
}
```
Please refer [here](/docs/common/attributes.md) for the full explanation of parameters

## Success Response

**Code** : `201 CREATED`

**Content example**

```json
{
    "resource": {
        "id": 123,
        "name": "John Smith",
        "street": "Via roma",
        "zip_code": "00100",
        "city": "Rome",
        "province": "RM",
        "country": "IT",
        "created_at": "2018-01-01 00:00:00",
        "updated_at": "2018-01-01 00:00:00"
    }
}
```

## Error Responses

**Code** : `400 BAD REQUEST`

**Content example**

```json
{
    "errors": [
        {
            "code": "ADDRESS_NAME_NOT_DEFINED",
            "attribute": "name",
            "message": "The name is required"
        }
    ]
}
```

Please refer [here](/docs/common/errors.md) for the full explanation of errors