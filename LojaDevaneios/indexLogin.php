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

      <!-- Carousel
        ================================================== -->
        <div class="container">
          <div  id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>

          <div class="carousel-inner" role="listbox">

            <div class="item active">
              <div class="container">
                <h2>Tirinhas</h2>
              </div>
              <img class="first-slide" src="imagens/4.png" alt="First slide">

             </div>

             <div class="item">
               <div class="container">
                 <h2>Tirinhas</h2>
               </div>
               <img class="f-slide" src="imagens/3.png" alt="F slide">
              </div>

              <div class="item">
              <div class="container">
                <h2>Loja Virtual</h2>
              </div>
                <img class="second-slide" src="imagens/camisa/camisaf2.png" alt="Second slide">
              </div>

              <div class="item">
              <div class="container">
                <h2>Loja Virtual</h2>
              </div>
                <img class="se-slide" src="imagens/camisa/camisa4.png" alt="Se slide">
              </div>


         </div>

          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        </div><!-- /.carousel -->

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
