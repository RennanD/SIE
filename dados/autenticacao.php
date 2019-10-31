 <?php
 include "conexao.php";
 $matricula = $_GET["matricula"];
 $senha = md5($_GET["senha"]);
 $sql = mysql_query("SELECT * FROM usuarios WHERE matricula ='$matricula' and senha ='$senha'") or die (mysql_error());
 $row = mysql_num_rows($sql);
 if($row > 0){
	 session_start();
	 $_SESSION["matricula"] = $matricula;
	 $_SESSION["autenticado"] = true;

	 header("Location:../pags/site.php?pagina=home");

 }
 else{
	 header("Location:../index.php?erro=1");
 }
 ?>
