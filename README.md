<h1>Rest Api</h1>

###List Products

####List all products
`GET api/products`

##Request
`GET` http://localhost/rest_api/public/api/products

###Response
`{
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
      "description": "Maxime ipsum alias ipsum placeat. Deleniti et ut facere voluptates. Reiciendis facilis aliquid        voluptatem vitae consequuntur eos. In deserunt iste et quibusdam vel.",
      "created_at": "2019-07-02 12:44:00",
      "updated_at": "2019-07-02 12:44:00"
    }
 }`
