<?php
session_start();
if(isset($_SESSION["nome"])){
$usuario=$_SESSION["nome"];
$idUser=$_SESSION['id'];
}else{
unset ($_SESSION['login']);
unset ($_SESSION['senha']);
unset ($_SESSION['nome']);
unset ($_SESSION['logado']);
unset ($_SESSION['id']);}

$db = new PDO('mysql:host=localhost;dbname=devaneiosloja','devaneiosloja', '123456');
if(isset($_POST["c1"])){
  $id1=1;
  $users =  $db->query("INSERT INTO `vendas`(idClienteVendas,idProdutoVendas) VALUES ($idUser,$id1)");
  $db->query("UPDATE produto SET quantidade = quantidade-1 WHERE idProduto = 1;");
}
if(isset($_POST["c2"])){
  $id2=2;
  $users = $db->query("INSERT INTO `vendas`(idClienteVendas,idProdutoVendas) VALUES ($idUser,$id2)");
   $db->query("UPDATE produto SET quantidade = quantidade-1 WHERE idProduto = 2;");
}
if(isset($_POST["c3"])){
  $id3=3;
  $users = $db->query("INSERT INTO `vendas`(idClienteVendas,idProdutoVendas) VALUES ($idUser,$id3)");
  $db->query("UPDATE produto SET quantidade = quantidade-1 WHERE idProduto = 3;");
}
if(isset($_POST["c4"])){
  $id4=4;
  $users = $db->query("INSERT INTO `vendas`(idClienteVendas,idProdutoVendas) VALUES ($idUser,$id4)");
  $db->query("UPDATE produto SET quantidade = quantidade-1 WHERE idProduto = 4;");
}
if(isset($_POST["c5"])){
  $id5=5;
  $users = $db->query("INSERT INTO `vendas`(idClienteVendas,idProdutoVendas) VALUES ($idUser,$id5)");
  $db->query("UPDATE produto SET quantidade = quantidade-1 WHERE idProduto = 5;");
}
if(isset($_POST["c6"])){
  $id6=6;
  $users = $db->query("INSERT INTO `vendas`(idClienteVendas,idProdutoVendas) VALUES ($idUser,$id6)");
  $db->query("UPDATE produto SET quantidade = quantidade-1 WHERE idProduto = 6;");
}
if(isset($_POST["c7"])){

  $id7=7;
  $users = $db->query("INSERT INTO `vendas`(idClienteVendas,idProdutoVendas) VALUES ($idUser,$id7)");
  $db->query("UPDATE produto SET quantidade = quantidade-1 WHERE idProduto = 7;");
}



    ?>
<!DOCTYPE html>
<html>
 <head>
  <title>Loja Virtual</title>
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
  </style>
</head>
<body>

  <div id="header">
    <div id="logo"><img src="imagens/devaneioslogo.png" width=467px; /></div>
    <ul id="navbar">
          <li><a href="indexLogin.php">Home</a></li>
          <li><a href="sobreLogin.php">Sobre</a></li>
          <li><a href="tirinhasLogin.php">Tirinhas</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>OLá</b> <span class="caret"></span></a>
    <ul id="login-dp" class="dropdown-menu">
      <li>
         <div class="row">
            <div class="col-md-12">
               <form class="form" role="form" method="post" action="logoff.php" accept-charset="UTF-8" id="login-nav">
                 <div class="bottom text-center">
                  <?php echo "Olá $usuario" . "</br>" ?>
                 </div>
                  <div class="bottom text-center">
                 <a href="dadosusuario.php"><b>Meus Dados</b></a>
               </div>
                  <div class="bottom text-center">
                 <a href="comprasusuario.php"><b>Minhas Compras</b></a>
               </div>
                  <div class="form-group">
                       <button type="submit" class="btn btn-primary btn-block">Logoff</button>
                    </div>
                 </form>
              </div>
           </div>
        </li>
      </ul>
        </li>
           <li><a href="lojaVirtualLogin.php">Loja Virtual</a></li>
      </ul>
     </div><!-- /.navbar-collapse -->
<div class="starter">
<center>
    <h2>Compra efetuada com sucesso!!</h2>
</center>
</div>

   <footer class="footer navbar-fixed-bottom">
   <div class="container">
     <center>
     <h4>Social Media</h4>
     <a target="_blank" href="https://www.facebook.com/devaneios.abstratos/?ref=br_rs"> <img src="icons/facebook.png" width=50px;/> </a>
     <a target="_blank" href="https://www.instagram.com/dasaxavierart/"> <img src="icons/instagram.png" width=70px;/></a>
   </center>
     <h4> Desenvolvido por Dasayeve Xavier & Deise Silva para a disciplina WEBI</h4>
  </div>
</footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
