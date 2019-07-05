# Rest Api With Laravel

## List Products

`GET api/products`

## Request
`GET http://localhost/rest_api/public/api/products`

## Response
~~~
{
  "current_page": 1,
  "data": [
    {
      "id": 1,
      "name": "Dr. Nakia Abernathy PhD",
      "price": 3.13,
      "description": "Est soluta quia sit esse placeat rerum qui. Laudantium quia consequatur tenetur et assumenda.",
      "created_at": "2019-07-02 12:44:00",
      "updated_at": "2019-07-02 12:44:00"
    },
    {
      "id": 2,
      "name": "Kendrick Terry",
      "price": 4.51,
      "description": "Maxime ipsum alias ipsum placeat. Deleniti et ut facere voluptates. Reiciendis facilis aliquid.",
      "created_at": "2019-07-02 12:44:00",
      "updated_at": "2019-07-02 12:44:00"
    }
  ]
}
~~~

## Add a Product

`POST api/products`

## Request
`POST http://localhost/rest_api/public/api/products`

#### Supply with the following properties:
Property    | Type
--------    | ----
name        | string
price       | float
description | text

## Response
~~~
{
  "msg": "Product Created Successfully",
  "code": 201
}
~~~

## Update a Product

`PUT api/products/id`

## Request
`PUT http://localhost/rest_api/public/api/products/id`

#### Supply new information(s):
Property    | Type
--------    | ----
name        | string
price       | float
description | text

## Response
~~~
{
  "msg": "Product Updated Successfully",
  "code": 201
}
~~~

## Delete a Product

`DELETE api/products/id`

## Request
`DELETE http://localhost/rest_api/public/api/products/id`

## Response
~~~
{
  "msg": "Product (Product Name) Deleted Successfully",
  "code": 200
}
~~~
