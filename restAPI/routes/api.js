const express = require('express')
const router = express.Router()
const Event = require('../models/event_table')

//get a list of events from the db
router.get('/events',function(req,res){
  res.send({type:'GET'})
})

//add a new event to the db
router.post('/events',function(req,res){
  Event.create(req.body).then(function(event){
    res.send(event)
  })
})

module.exports = router
