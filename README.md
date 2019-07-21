# Simple API with RabbitMq [![Build Status](https://travis-ci.com/lenniDespero/simple-api-app.svg?branch=master)](https://travis-ci.com/lenniDespero/simple-api-app)

### Prepare

Clone or download project and edit env options in .env file.

#### Usage
Run containers by command:
`$ docker-compose up --build`

Send message by Postman or curl 
`$ curl -d "message=test" -X POST http://localhost:8080/message/send`

Check message status by url:
`http://127.0.0.1:8080/message/get={message_id}`