var Produto = require('../models/eventos');


exports.save =  function(event,timestamp, callback){
	new Produto({
		'event': event,
		'timestamp': timestamp,
	}).save(function(error, produto){
		if(error){
			callback({error: 'Não foi possivel salvar'})
		}else{
			callback(produto);
		}
	});
}

exports.list = function(callback){
	Produto.find({}, function(error, produtos){
		if(error){
			callback({error: 'Não foi possivel encontrar os eventos'});
		}else{
			callback(produtos);
		}
	});
}