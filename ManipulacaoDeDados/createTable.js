var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "12345678",
  database : "database"
});

function createTable(conn){
 
      const sql = "CREATE TABLE IF NOT EXISTS tabela (\n"+
                  "tempo varchar(100),\n"+
                  "revenue int,\n"+
                  "transaction_id int NOT NULL,\n"+
                  "product_name varchar(150),\n"+
                  "product_price int,\n"+
                  "store_name varchar(150)"+
                ");";
      
      conn.query(sql, function (error, results, fields){
          if(error) return console.log(error);
          console.log('criou a tabela!');
      });
}

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
  createTable(con);

});
