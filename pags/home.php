<?php
$matri = $_SESSION["matricula"];
include_once('../dados/conexao.php');
$res = "SELECT * FROM";
mysql_query($res);
$user = mysql_query("SELECT * FROM usuarios WHERE matricula = '$matri'");
 ?>

<html>
	<head>
	<style>
	.container-fluid {
	    padding-top: 0px;
	    padding-bottom: 5px;
	}
	.container-fluid img{
		width: 200px;
		height: 200px;
	}
	</style>
	<meta charset = "utf-8">
	</head>

	<body>
		<div class="container-fluid bg-1 text-center">
		  <img src="../src/user.png" class="img-circle">
		  <h3>Bem Vindo <?php while($row_user =mysql_fetch_assoc($user)){ echo $row_user['nome'];}	?> ! </h3>
		</div>

		<div class="container-fluid bg-2 text-center">
		  <h3>Sistema de Integração Estágio</h3>
		  <p>Um sistema que visa a agilazação de contratos</br>
			e avaliacao de estágios e estágiarios</p>
		</div>
		</div>

		</body>
		</html>
