<?php
include "conexao.php";

$matricula = $_POST['matricula'];
$nova_senha = md5($_POST['nova_senha']);

$sql = mysql_query("SELECT * FROM usuarios WHERE matricula ='$matricula'") or die (mysql_error());
$row = mysql_num_rows($sql);

if($row > 0){
mysql_query("UPDATE usuarios SET senha = '$nova_senha' WHERE matricula = '$matricula'");
    header("Location:../pags/altera_senha.php?msg=1");
}else{
        header("Location:../pags/altera_senha.php?msg=2");

}


?>
