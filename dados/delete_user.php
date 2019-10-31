<?php
include 'conexao.php';

session_start();

$id = $_GET['id'];

$delete = mysql_query("DELETE FROM usuarios WHERE id = '$id'");
$_SESSION['excluido'] = "Usuário excluido com susseço!";
 header("Location:../pags/site.php?pagina=list_user");

 ?>
