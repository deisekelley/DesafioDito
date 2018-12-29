const url = 'https://storage.googleapis.com/dito-questions/events.json'
const axios = require('axios')
// include mysql module
var mysql = require('mysql');

var conn = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "12345678",
  database: "database"
});


axios.get(url).then(response => {
  const result = response.data
  const w = (result.events).length;
  //Coleto todas variaveis que colocarei no meu banco
  for (var i = 0; i < w; i++) {
    const y = (result.events[i].custom_data).length;
    var tempo = result.events[i].timestamp;
    var rev = result.events[i].revenue;
    for (var j = 0; j < y; j++) {
      if (result.events[i].custom_data[j].key == 'transaction_id') {
        var id = result.events[i].custom_data[j].value;
      }
      if (result.events[i].custom_data[j].key == 'store_name') {
        var store = result.events[i].custom_data[j].value;
      }
      if (result.events[i].custom_data[j].key == 'product_name') {
        var nomeProduto = result.events[i].custom_data[j].value;
      }

      if (result.events[i].custom_data[j].key == 'product_price') {
        var precoProduto = result.events[i].custom_data[j].value;
      }
    }

    //Insercao no banco de dados
    var tempostring = tempo;
    if (nomeProduto == undefined) {
      if (rev !== undefined) {
        if (store !== undefined) {
          if (store == null) {
            var sql = "INSERT INTO bancodedados(tempo, transaction_id, product_name, product_price) VALUES (" + " ' " + tempo + " ' " + ", " + id + "," + " ' " + nomeProduto + " ' " + "," + precoProduto + ")";
            conn.query(sql);
          } else {
            var sql = "INSERT INTO bancodedados(tempo, revenue,transaction_id, store_name) VALUES (" + " ' " + tempo + " ' " + "," + rev + " , " + id + "," + " ' " + store + " ' " + ")";
            conn.query(sql);
          }
        } else {
          var sql = "INSERT INTO bancodedados(tempo, revenue,transaction_id) VALUES (" + " ' " + tempo + " ' " + "," + rev + " , " + id + "," + " ' " + ")";
          conn.query(sql);
        }

      } else {
        if (store !== undefined) {
          if (store == null) {
            var sql = "INSERT INTO bancodedados(tempo, transaction_id, product_name, product_price) VALUES (" + " ' " + tempo + " ' " + ", " + id + "," + " ' " + nomeProduto + " ' " + "," + precoProduto + ")";
            conn.query(sql);
          } else {
            var sql = "INSERT INTO bancodedados (tempo,transaction_id, store_name) VALUES (" + " ' " + tempo + " ' " + "," + id + "," + " ' " + store + " ' " + ")";
            conn.query(sql);
          }

        } else {
          var sql = "INSERT INTO bancodedados(tempo,transaction_id) VALUES (" + " ' " + tempo + " ' " + "," + id + "," + ")";
          conn.query(sql);
        }

      }

    } else {
      if (rev !== undefined) {
        if (store !== undefined) {
          if (store == null) {
            var sql = "INSERT INTO bancodedados(tempo, transaction_id, product_name, product_price) VALUES (" + " ' " + tempo + " ' " + ", " + id + "," + " ' " + nomeProduto + " ' " + "," + precoProduto + ")";
            conn.query(sql);
          } else {
            var sql = "INSERT INTO bancodedados (tempo, revenue, transaction_id, product_name, product_price,store_name) VALUES (" + " ' " + tempo + " ' " + "," + rev + "," + id + "," + " ' " + nomeProduto + " ' " + "," + precoProduto + "," + " ' " + store + " ' " + ")";
            conn.query(sql);
          }
        } else {
          var sql = "INSERT INTO bancodedados(tempo, revenue transaction_id, product_name, product_price) VALUES (" + " ' " + tempo + " ' " + "," + rev + "," + id + "," + " ' " + nomeProduto + " ' " + "," + precoProduto + ")";
          conn.query(sql);
        }

      } else {
        if (store !== undefined) {
          if (store == null) {
            var sql = "INSERT INTO bancodedados(tempo, transaction_id, product_name, product_price) VALUES (" + " ' " + tempo + " ' " + ", " + id + "," + " ' " + nomeProduto + " ' " + "," + precoProduto + ")";
            conn.query(sql);
          } else {
            var sql = "INSERT INTO bancodedados(tempo, transaction_id, product_name, product_price,store_name) VALUES (" + " ' " + tempo + " ' " + " , " + id + "," + " ' " + nomeProduto + " ' " + "," + precoProduto + "," + " ' " + store + " ' " + ")";
            conn.query(sql);
          }
        } else {
          var sql = "INSERT INTO bancodedados(tempo, transaction_id, product_name, product_price) VALUES (" + " ' " + tempo + " ' " + ", " + id + "," + " ' " + nomeProduto + " ' " + "," + precoProduto + ")";
          conn.query(sql);
        }

      }
    }
    tempo = null; rev = null; id = null; nomeProduto = null; precoProduto = null; store = null;
  }

  var resultado = [];
  var resultado1 = [];
  var resultado2;
  let vetId;

  //Query que fara um group_concat no meu banco
  var bla = conn.query("select transaction_id,group_concat(tempo order by transaction_id,',') as tempo, group_concat(revenue order by transaction_id, ', ') as revenue, group_concat(product_name order by transaction_id, ', ') as product_name, group_concat(product_price order by transaction_id, ', ') as product_price, group_concat(store_name order by transaction_id, ', ') as store_name from bancodedados group by transaction_id", function (err, result, fields) {
    if (err) throw err;
    var string = JSON.stringify(result);
    vetId = JSON.parse(string);

    //for que coletara o menor tempo

    var tempo1; var menor; var vetMenor = []
    for (var i = 0; i < vetId.length; i++) {
      var vet = [];
      var k = vetId[i].tempo;
      var vetTempo = []
      var vetormenornormal = []
      var cont;
      temp = k.split(",")

      for (var x = 0; x < 1; x++) {
        for (var j = 0; j < temp.length; j++) {
          tempo1 = temp[j].substring(12, 20);
          vetTempo[j] = tempo1;
        }
        var guarda = 0

        for (var j = 1; j < temp.length; j++) {
          menor = vetTempo[j - 1];
          if (menor > vetTempo[j]) {
            menor = vetTempo[j];
            guarda = j
          }
        }
        vetMenor[i] = temp[guarda]
      }

    }

    var vetnome = " ";
    var vetpreco = " ";
    var vet1 = []
    var cont = 0;
    var vet3 = []
    var cont1 = 0

    //for que faz um vetor especifico de prodruto e preco
    for (var i = 0; i < vetId.length; i++) {
      var vet = [];
      var k = vetId[i].product_name;
      var a = vetId[i].product_price;
      vetnome = k.split(",") //['sa','d']
      vetpreco = a.split(",")//['q','q']
      for (j = 0; j < vetnome.length; j++) {
        vet[j] = {
          "name": vetnome[j],
          "price": vetpreco[j]
        }
        cont++
      }
      var vet2 = []

      vet1[i] = vet2.concat(vet)

    }

    "timeline : [{"
    for (var m = 0; m < vetId.length; m++) {
      resultado[m] = {
        "tempo": vetMenor[m],
        "revenue": vetId[m].revenue,
        "transaction_id": vetId[m].transaction_id,
        "store_name": vetId[m].store_name,
        "products": vet1[m]
      }
    }

    "}]"
    for (variable in resultado) {
      console.log(resultado[variable])
    }
  });
});