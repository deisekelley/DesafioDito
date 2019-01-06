<?php
session_start();
if(isset($_SESSION["nome"])){
$usuario=$_SESSION["nome"];
}else{
unset ($_SESSION['login']);
unset ($_SESSION['senha']);
unset ($_SESSION['nome']);
unset ($_SESSION['logado']);
unset ($_SESSION['id']);}
    $db = new PDO('mysql:host=localhost;dbname=devaneiosloja','devaneiosloja', '123456');
    $users = $db->query(" SELECT nome, email, senha from cliente");
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
           <li><a href="index.php">Home</a></li>
           <li><a href="sobre.php">Sobre</a></li>
           <li><a href="tirinhas.php">Tirinhas</a></li>
       <li class="dropdown">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
     <ul id="login-dp" class="dropdown-menu">
       <li>
          <div class="row">
             <div class="col-md-12">
               <form class="form" role="form" method="post" action="login.php" accept-charset="UTF-8" id="login-nav">
                  <div class="form-group">
                     <label class="sr-only" for="exampleInputEmail2">Email address</label>
                     <input type="email" class="form-control" id="exampleInputEmail2" name="email" placeholder="Email" required>
                  </div>
                  <div class="form-group">
                     <label class="sr-only" for="exampleInputPassword2">Password</label>
                     <input type="password" class="form-control" id="exampleInputPassword2" name="senha" placeholder="Senha" required>
                  </div>
                  <div class="form-group">
                       <button type="submit" class="btn btn-primary btn-block">Logar</button>
                    </div>
                 </form>
               </div>
               <div class="bottom text-center">
                Não tem cadastro? <a href="cadastro.php"><b>Cadastre-se</b></a>
               </div>
            </div>
         </li>
       </ul>
         </li>
            <li><a href="lojavirtual.php">Loja Virtual</a></li>
       </ul>
     </div><!-- /.navbar-collapse -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <form method="post"action="#">
        <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="starter">
     <div class="container marketing">
          <!-- Three columns of text below the carousel -->

          <div class="row">

            <div class="col-lg-4">
              <img class="img-circle" src="imagens/camisa/camisa.png" alt="Generic placeholder image" width="140" height="140">
              <?php
              $camisa = $db->query(" SELECT nomeProduto, preco from produto where idProduto=1");
              $linha = $camisa ->fetch(PDO::FETCH_ASSOC);
              $nomeCamisa=$linha["nomeProduto"];
              $preco=$linha["preco"];
              echo "<h4>$nomeCamisa</h4>";
              echo "<h2>R$" . "$preco" . "</h2>";

              $estoque = $db->query(" SELECT quantidade from produto where idProduto=1");
              $linha = $estoque ->fetch(PDO::FETCH_ASSOC);
              $quantidade=$linha["quantidade"];
              if($quantidade>0){
                echo "<input type=\"checkbox\" id=\"c1\" name=\"c1\" /><label for=\"c1\"><span></span>Comprar</label>";
              }else{
                 echo "Produto indisponível no estoque";
              }
              ?>

            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img class="img-circle" src="imagens/camisa/camisa2.png" alt="Generic placeholder image" width="140" height="140">
              <?php
              $camisa = $db->query(" SELECT nomeProduto, preco from produto where idProduto=2");
              $linha = $camisa ->fetch(PDO::FETCH_ASSOC);
              $nomeCamisa=$linha["nomeProduto"];
              $preco=$linha["preco"];
              echo "<h4>$nomeCamisa</h4>";
              echo "<h2>R$" . "$preco" . "</h2>";

              $estoque = $db->query(" SELECT quantidade from produto where idProduto=2");
              $linha = $estoque ->fetch(PDO::FETCH_ASSOC);
              $quantidade=$linha["quantidade"];
              if($quantidade>0){
                echo "<input type=\"checkbox\" id=\"c2\" name=\"c2\" /><label for=\"c2\"><span></span>Comprar</label>";
              }else{
                 echo "Produto indisponível no estoque";
              }
              ?>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-4">
              <img class="img-circle" src="imagens/camisa/camisa3.png" alt="Generic placeholder image" width="140" height="140">
              <?php
              $camisa = $db->query(" SELECT nomeProduto, preco from produto where idProduto=3");
              $linha = $camisa ->fetch(PDO::FETCH_ASSOC);
              $nomeCamisa=$linha["nomeProduto"];
              $preco=$linha["preco"];
              echo "<h4>$nomeCamisa</h4>";
              echo "<h2>R$" . "$preco" . "</h2>";

              $estoque = $db->query(" SELECT quantidade from produto where idProduto=3");
              $linha = $estoque ->fetch(PDO::FETCH_ASSOC);
              $quantidade=$linha["quantidade"];
              if($quantidade>0){
                echo "<input type=\"checkbox\" id=\"c3\" name=\"c3\" /><label for=\"c3\"><span></span>Comprar</label>";
              }else{
                 echo "Produto indisponível no estoque";
              }

              ?>

            </div><!-- /.col-lg-4 -->
          </div>
        </div>

        <div class="starter">
         <div class="container marketing">
            <div class="col-lg-4">
              <img class="img-circle" src="imagens/camisa/camisa4.png" alt="Generic placeholder image" width="140" height="140">
              <?php
              $camisa = $db->query(" SELECT nomeProduto, preco from produto where idProduto=4");
              $linha = $camisa ->fetch(PDO::FETCH_ASSOC);
              $nomeCamisa=$linha["nomeProduto"];
              $preco=$linha["preco"];
              echo "<h4>$nomeCamisa</h4>";
              echo "<h2>R$" . "$preco" . "</h2>";
              $estoque = $db->query(" SELECT quantidade from produto where idProduto=4");
              $linha = $estoque ->fetch(PDO::FETCH_ASSOC);
              $quantidade=$linha["quantidade"];
              if($quantidade>0){
                echo "<input type=\"checkbox\" id=\"c4\" name=\"c4\" /><label for=\"c4\"><span></span>Comprar</label>";
              }else{
                 echo "Produto indisponível no estoque";
              }
              ?>

            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img class="img-circle" src="imagens/camisa/camisaf2.png" alt="Generic placeholder image" width="140" height="140">
              <?php
              $camisa = $db->query(" SELECT nomeProduto, preco from produto where idProduto=5");
              $linha = $camisa ->fetch(PDO::FETCH_ASSOC);
              $nomeCamisa=$linha["nomeProduto"];
              $preco=$linha["preco"];
              echo "<h4>$nomeCamisa</h4>";
              echo "<h2>R$" . "$preco" . "</h2>";
              $estoque = $db->query(" SELECT quantidade from produto where idProduto=5");
              $linha = $estoque ->fetch(PDO::FETCH_ASSOC);
              $quantidade=$linha["quantidade"];
              if($quantidade>0){
                echo "<input type=\"checkbox\" id=\"c5\" name=\"c5\" /><label for=\"c5\"><span></span>Comprar</label>";
              }else{
                 echo "Produto indisponível no estoque";
              }
              ?>

            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img class="img-circle" src="imagens/camisa/camisaf3.png" alt="Generic placeholder image" width="140" height="140">
              <?php
              $camisa = $db->query(" SELECT nomeProduto, preco from produto where idProduto=6");
              $linha = $camisa ->fetch(PDO::FETCH_ASSOC);
              $nomeCamisa=$linha["nomeProduto"];
              $preco=$linha["preco"];
              echo "<h4>$nomeCamisa</h4>";
              echo "<h2>R$" . "$preco" . "</h2>";

              $estoque = $db->query(" SELECT quantidade from produto where idProduto=6");
              $linha = $estoque ->fetch(PDO::FETCH_ASSOC);
              $quantidade=$linha["quantidade"];
              if($quantidade>0){
                echo "<input type=\"checkbox\" id=\"c6\" name=\"c6\" /><label for=\"c6\"><span></span>Comprar</label>";
              }else{
                 echo "Produto indisponível no estoque";
              }

              ?>

            </div><!-- /.col-lg-4 -->
       </div>
     </div>
     <div class="starter">
      <div class="container marketing">
            <div class="col-lg-4">
              <img class="img-circle" src="imagens/camisa/camisaf1.png" alt="Generic placeholder image" width="140" height="140">
              <?php
              $camisa = $db->query(" SELECT nomeProduto, preco from produto where idProduto=7");
              $linha = $camisa ->fetch(PDO::FETCH_ASSOC);
              $nomeCamisa=$linha["nomeProduto"];
              $preco=$linha["preco"];
              echo "<h4>$nomeCamisa</h4>";
              echo "<h2>R$" . "$preco" . "</h2>";

              $estoque = $db->query(" SELECT quantidade from produto where idProduto=7");
              $linha = $estoque ->fetch(PDO::FETCH_ASSOC);
              $quantidade=$linha["quantidade"];
              if($quantidade>0){
                echo "<input type=\"checkbox\" id=\"c7\" name=\"c7\" /><label for=\"c7\"><span></span>Comprar</label>";
              }else{
                 echo "Produto indisponível no estoque";
              }
              ?>

            </div><!-- /.col-lg-4 -->
          </div>
        </div>
        <center>
       <h1><a class="btn btn-lg btn-danger" href="#" role="button">Faça Login para comprar</a></h1>
      </center>
    </form>
      </div>
<div class="starter">
  <div class="footer">
   <div class="container">
     <center>
     <h4>Social Media</h4>
     <a target="_blank" href="https://www.facebook.com/devaneios.abstratos/?ref=br_rs"> <img src="icons/facebook.png" width=50px;/> </a>
     <a target="_blank" href="https://www.instagram.com/dasaxavierart/"> <img src="icons/instagram.png" width=70px;/></a>
   </center>
     <h4> Desenvolvido por Dasayeve Xavier & Deise Silva para a disciplina WEBI</h4>
  </div>
</footer>
</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
