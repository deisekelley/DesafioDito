const express = require('express')
var app = require('./config/app_config')
var db  = require('./config/db_config')
var User = require('./models/eventos')
var eventController = require('./controllers/eventController')

app.use(express.static('AutoComplete'));

app.get('/',function(req,res){
	res.end('Bem-vindo a API de Eventos')
});

//rotas de produtos
app.get('/eventos',function(req, res){
	eventController.list(function(resp){
		res.json(resp)
	})
});

app.post('/add',function(req, res){
	var event = req.body.event
	var timestamp = req.body.timestamp
    console.log(event)
    console.log(timestamp)

	eventController.save(event, timestamp, function(resp){
		res.json(resp);
	});
});

