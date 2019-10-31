<?php
include "../classes/user_class.php";
include "conexao.php";
session_start();
$usuario = $_POST["usuario"];
$matricula = $_POST["matricula"];
$senha = md5($_POST["senha"]);

$user = new Usuario();
 $user ->setUser($usuario);
 $user ->setMatricula($matricula);
 $user ->setSenha($senha);
 $sql = mysql_query("SELECT * FROM usuarios WHERE matricula ='$matricula'") or die (mysql_error());
 $row = mysql_num_rows($sql);
 if($row > 0){
   $_SESSION['error'] = "Já existe um usuário com esta matrícula!";
   header("Location:../pags/site.php?pagina=new_user");
 }
 else{
$insert = mysql_query("INSERT INTO usuarios(nome,matricula,senha) VALUES('$usuario','$matricula','$senha')");
   $_SESSION['success'] = "Usuário cadasrado com susseço!";
  header("Location:../pags/site.php?pagina=new_user");
}
?>
