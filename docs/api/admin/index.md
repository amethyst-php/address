# Query Address

**URL** : `/api/v1/admin/addresses/:id`

**Method** : `GET`

**Auth required** : YES 

**Permissions required** : None

**Data example**

```json
{
    "query": "city = 'Rome'",
    "show": 10,
    "page": 1,
    "sort_field": "id",
    "sort_direction": "DESC"
}
```

Please refer [here](https://github.com/railken/search-query) for the syntax of the query param

## Success Response

**Code** : `200 OK`

**Content example**

```json
{
	resources: [
	    {
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
	],
	pagination: {
        "total": 1,
        "skip": 0,
        "take": 10,
        "from": 1,
        "to": 1,
        "page": 1,
        "pages": 1
	}
}
```

## Error Responses

**Code** : `404 NOT FOUND`