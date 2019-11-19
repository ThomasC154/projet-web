const express = require('express')
const app = express()
const models = require('./models')
var userController = require('./controllers/userController');

app.get('/', function (req, res) {
  res.send('Hello World!')
})

app.use('/users', userController);

app.listen(8000, async function () {
  console.log('Example app listening on port 8000!')
  console.log(await models.user.findAll())
})

 //res.status(200).json(user)