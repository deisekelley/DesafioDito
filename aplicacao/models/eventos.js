var mongoose = require('mongoose');
var Schema  = mongoose.Schema;

var EventSchema = new Schema({
	event:String,
	timestamp: String,
});

module.exports = mongoose.model('Event', EventSchema);