const url = 'https://storage.googleapis.com/dito-questions/events.json'
const axios = require('axios')
// include mysql module
var mysql = require('mysql');
var conn = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "12345678",
  database : "database"
});



axios.get(url).then(response => {
    const result = response.data
    console.log(result)

    const w = (result.events).length;
    console.log(w)
        var resultado = [];

        for(var i=0;i<w;i++){
          const y = (result.events[i].custom_data).length;

          var tempo = result.events[i].timestamp;
          console.log('timestamp i ' + i + j + ' '+ result.events[i].timestamp);

          var rev = result.events[i].revenue;
          console.log(' Revenue i ' + i + j +  ' '+ result.events[i].revenue);

          for(var j=0;j<y;j++){

            if(result.events[i].custom_data[j].key == 'transaction_id'){
              var id = result.events[i].custom_data[j].value;
              console.log(' Transaction id j ' + i + j+ ' '+result.events[i].custom_data[j].value);
            }

            if(result.events[i].custom_data[j].key == 'store_name'){
              var store = result.events[i].custom_data[j].value;
              console.log('store name j ' + i + j+' '+result.events[i].custom_data[j].value);
            }
            if(result.events[i].custom_data[j].key == 'product_name'){
              var nomeProduto = result.events[i].custom_data[j].value;
              console.log('nome produto j ' + i+j + ' '+result.events[i].custom_data[j].value);
            }

            if(result.events[i].custom_data[j].key == 'product_price'){
              var precoProduto = result.events[i].custom_data[j].value;
              console.log('preco produto j ' + i + j+' '+result.events[i].custom_data[j].value);
            }
          }

            if(rev !== undefined){
               var sql = "INSERT INTO tabela (tempo, revenue, transaction_id, product_name, product_price,store_name) VALUES (" + " ' " + tempo + " ' "+ ","+ rev + "," + id + "," + " ' " +nomeProduto+ " ' "+ ","+ precoProduto+","+ " ' "+store + " ' " +")";
               conn.query(sql);  
               console.log(' Dados inseridos ! :) ');
            }else{
              var sql = "INSERT INTO tabela (tempo, transaction_id, product_name, product_price,store_name) VALUES (" + " ' " + tempo + " ' "+ ","+ id + "," + " ' " +nomeProduto+ " ' "+ ","+ precoProduto+","+ " ' "+store + " ' " +")";
              conn.query(sql);  
              console.log(' Dados inseridos  ! :) ');
            }
            
          
        }

    });