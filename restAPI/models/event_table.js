const mongoose = require('mongoose')
const Schema = mongoose.Schema

//creat events Schema & model
const EventSchema = new Schema({
  event:{
    type:String,
    required:[true, 'Event fild is required']
  },
  timestamp:{
    type:String,
    required:[true, 'Timestamp fild is required']
  }
})

const Event = mongoose.model('event', EventSchema)

module.exports = Event
