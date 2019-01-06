
<!DOCTYPE html>

<html>
 <head>
  <title>Devaneios Abstratos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="javascript.js"></script>
</head>
<body>

   <div id="header">
     <div id="logo"><img src="imagens/devaneioslogo.png" width=467px; /></div>

      <ul id="navbar">
            <li><a href="index.php">Logoff</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->

<div class="starter">
      <h2>Alteração de Preço e Estoque </h2>
</div><!-- /.container -->


  <form action="alteraadmin.php" method="post">
        Produto ID: <input type="text" name="id">
        Preco: <input type="text" name="preco">
        Quantidade: <input type="text" name="quantidade">
        <input type="submit" name="alterar" value="Alterar">
  </form>

  <?php
     if(isset($_POST["id"])) {
       $id = $_POST["id"];
     } else {
       $id = $_GET["id"];
    }
        if(isset($_POST["preco"])) {
              $preco = $_POST["preco"];
          } else {
              $preco = $_GET["preco"];
          }
          if(isset($_POST["quantidade"])) {
                $quantidade = $_POST["quantidade"];
            } else {
                $quantidade = $_GET["quantidade"];
            }

      $db = new PDO('mysql:host=localhost;dbname=devaneiosloja','devaneiosloja', '123456');
      $db->query("UPDATE produto SET preco = $preco WHERE idProduto = $id;");
      $db->query("UPDATE produto SET quantidade = $quantidade WHERE idProduto = $id;");

      $admin = $db->query("select* from produto");
  ?>


  <table class="table">
     <tr>
         <th>Produto ID</th>
         <th>Nome</th>
         <th>Tipo</th>
         <th>Preco</th>
         <th>Quantidade</th>
     </tr>
 <?php
     while( $linha = $admin->fetch(PDO::FETCH_ASSOC) ) {
         echo "<tr>";
         echo "<td>" . $linha["idProduto"] . "</td>";
         echo "<td>" . $linha["nomeProduto"] . "</td>";
         echo "<td>" . $linha["tipo"] . "</td>";
         echo "<td>" . $linha["preco"] . "</td>";
         echo "<td>" . $linha["quantidade"] . "</td>";
         echo "</tr>";
     }
  ?>
</table>

      <div class="footer">
       <div class="container">
         <center>
         <h4>Social Media</h4>
         <a target="_blank" href="https://www.facebook.com/devaneios.abstratos/?ref=br_rs"> <img src="icons/facebook.png" width=50px;/> </a>
         <a target="_blank" href="https://www.instagram.com/dasaxavierart/"> <img src="icons/instagram.png" width=70px;/></a>
       </center>
         <h4> Desenvolvido por Dasayeve Xavier & Deise Silva para a disciplina WEBI</h4>
      </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
