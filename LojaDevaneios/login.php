<?php
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST["email"];
$senha = $_POST["senha"];

try{
$db = new PDO('mysql:host=localhost;dbname=devaneiosLoja','devaneiosloja', '123456');
}catch(PDOException $e){
  echo 'Connection failed: ' . $e->getMessage();

}


// A variavel $result pega as varias $login e $senha, faz uma pesquisa na tabela de usuarios

$result = $db->query("SELECT * FROM `cliente` WHERE `email` = '$login' AND `SENHA` = '$senha'");

//$row_cnt = count($result);
//$row_cnt = count($linha);
//echo $row_cnt;
//checa se algum parametro é null
$linha = $result->fetch(PDO::FETCH_ASSOC);
if( !$linha["idCliente"]==null) {
  $_SESSION["login"] = $login;
  $_SESSION["senha"] = $senha;
  $_SESSION["nome"] = $linha["nome"];
  $_SESSION["id"] = $linha["idCliente"];
  $_SESSION["logado"]=1;

if($_SESSION["nome"] == "Deise Silva"){
  header('location:indexadmin.php');
}else{
  header('location:indexLogin.php');
}

} else {
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
    unset ($_SESSION['nome']);
    unset ($_SESSION['logado']);
    $_SESSION["id"] = $linha["id"];
    header('location:index.php');

    }

?>
