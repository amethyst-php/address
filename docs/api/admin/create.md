# Create Address

Create an Address

**URL** : `/api/v1/admin/addresses`

**Method** : `POST`

**Auth required** : YES

**Permissions required** : address.*

**Data constraints**

Provide name of Address to be created.

```json
{
    "name": "[unicode 255 chars max]",
    "street": "[unicode 255 chars max]",
    "zip_code": "[unicode 255 chars max]",
    "city": "[unicode 255 chars max]",
    "province": "[unicode 255 chars max]",
    "country": "[unicode 255 chars max]",
}
```

**Data example** All fields must be sent.

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

## Success Response

**Condition** : If everything is OK

**Code** : `201 CREATED`

**Content example**

```json
{
	"message": "ok",
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

**Condition** : If fields are wrong.

**Code** : `400 BAD REQUEST`

**Content example**

```json
{
    "errors": [
    	{
	        "code": "ADDRESS_NAME_NOT_DEFINED"
	        "label": "name"
	        "message": "The name is required"
	    }
    ]
}
```