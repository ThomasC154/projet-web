const express = require('express');
const router = express.Router();
const models = require('../models');
const User = models.User;

router.get('/', function(req, res){
	res.send('Coucou je marche');
});

module.exports = router;