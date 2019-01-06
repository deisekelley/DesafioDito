<?php
  $db = new PDO('mysql:host=localhost;dbname=devaneiosloja','devaneiosloja', '123456');
 ?>
<!DOCTYPE html>  <!-- -->
<html>

<title>Cadastro</title>
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
             <li><a href="index.php">Home</a></li>
             <li><a href="sobre.php">Sobre</a></li>
             <li><a href="tirinhas.php">Tirinhas</a></li>
         <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
       <ul id="login-dp" class="dropdown-menu">
         <li>
            <div class="row">
               <div class="col-md-12">
                  <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                     <div class="form-group">
                        <label class="sr-only" for="exampleInputEmail2">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email" required>
                     </div>
                     <div class="form-group">
                        <label class="sr-only" for="exampleInputPassword2">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Senha" required>
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


       <form action="cadastroinclusao.php" method="post">
       <div id="divCenter">
          <form action="#" method="post">
            <fieldset>
                <fieldset class="grupo">
                  <div class="campo">
                      <label for="nome">Nome</label>
                      <input type="text" id="nome" name="nome" style="width: 41em" value="" required>
                  </div>
                 </fieldset>
                  <fieldset class="grupo">
                    <div class="campo">
                        <label for="snome">Rua</label>
                        <input type="text" id="snome" name="rua" style="width: 20em" value="" required>
                    </div>
                    <div class="campo">
                        <label for="snome">Número</label>
                        <input type="text" id="snome" name="numero" style="width: 10em" value="" required>
                    </div>
                <div class="campo">
                    <label for="telefone">Estado</label>
                    <input type="tel" id="estado" name="estado" style="width: 10em" value="" required>
                </div>
              </fieldset>
                <fieldset class="grupo">
                <div class="campo">
                    <label for="cpf">CPF</label>
                    <input type="text" id="cpf" name="cpf" style="width: 10em" value="" required>
                </div>
              <div class="campo">
                  <label for="email">E-mail</label>
                  <input type="text" id="email" name="email" style="width: 17em" value="" required>
              </div>

              <div class="campo">
               <label for="senha">Senha</label>
         		   <input type="password" name="senha" required><br>
             </div>
           </fieldset>

            <fieldset class="grupo">
               <div class="campo">
                <button type="submit" name="incluir" class="btn btn-primary">Cadastar</button>
              </div>
            </fieldset>
            </fieldset>
        </form>
      </div>
    </form>


  <footer class="footer navbar-fixed-bottom">
     <center>
     <h4>Social Media</h4>
     <a target="_blank" href="https://www.facebook.com/devaneios.abstratos/?ref=br_rs"> <img src="icons/facebook.png" width=50px;/> </a>
     <a target="_blank" href="https://www.instagram.com/dasaxavierart/"> <img src="icons/instagram.png" width=70px;/></a>
   </center>
    <h4> Desenvolvido por Dasayeve Xavier & Deise Silva para a disciplina WEBI</h4>
</footer>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>


  </body>
  </html>
