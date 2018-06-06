# Show Address

**URL** : `/api/v1/admin/addresses/:id`

**Method** : `GET`

**Auth required** : YES 

**Permissions required** : None

## Success Response
 

**Code** : `200 OK`

**Content example**

```json
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
```

## Error Responses

**Code** : `404 NOT FOUND`