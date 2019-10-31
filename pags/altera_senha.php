<?php
			 if(isset($_GET["msg"])){
				 if($_GET["msg"] == 1){
					 echo  "<script>alert('Senha alterada com sucesso!')</script>";
				 }
				 if($_GET["msg"] == 2){
					 echo "<script>alert('Usuário não encontrado!')</script>";
				 }
			 }

?>
<html>
	<head>
	<title>Entrar</title>
	<link rel = "icon" type = "image/x-icon" href = "../src/login.png" width = "128px" height = "128px">
	<meta charset = "utf-8">
	<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.min.css">
	<link rel = "stylesheet" type = "text/css" href = "../css/login.css">
  <style>
	.container{
		border-radius:10px;
		margin-top:150px;
		width:500px;
		background:#ccffcc;
	}

	</style>
	</head>

	<body>
    <div class="container">

      <form class="form-signin" action="../dados/altera_dados.php" method="post">
        <h2 class="form-signin-heading">Alterar senha</h2>
        <label for="inputEmail" class="sr-only">Matrícula</label>
        <input type="text" name = "matricula" class="form-control" placeholder="Digite sua matrícula" required autofocus>
        <label for="inputPassword" class="sr-only">Nova Senha</label>
        <input type="password" name = "nova_senha" class="form-control" placeholder="Nova Senha" required>

        <button class="btn btn-lg btn-success btn-block" type="submit">Alterar</button>
        <a href="../index.php">voltar</a>
			</form>
    </div>

  </body>

</html>
