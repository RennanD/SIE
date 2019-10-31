<?php
 session_start();
 
   if(isset($_SESSION["autenticado"]) && isset($_SESSION["nome"])){
	   unset($_SESSION["autenticado"]);
	   unset($_SESSION["nome"]);
   }
   header("Location:../index.php");


?>
