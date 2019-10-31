<?php
			 if(isset($_GET["erro"])){
				 if($_GET["erro"] == 1){
					 echo  "<script>alert('Verifique se todos os dados estão corretos')</script>";
				 }
				 if($_GET["erro"] == 2){
					 echo "<script>alert('Faça login para entrar na pagina')</script>";
				 }
			 }

?>
<html>
	<head>
	<title>Entrar</title>
	<link rel = "icon" type = "image/x-icon" href = "src/login.png" width = "128px" height = "128px">
	<meta charset = "utf-8">
	<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.min.css">
	<link rel = "stylesheet" type = "text/css" href = "css/login.css">
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

      <form class="form-signin" action="dados/autenticacao.php" method="get">
        <h2 class="form-signin-heading">Iniciar nova sessão</h2>
        <label for="inputEmail" class="sr-only">Usuário</label>
        <input type="text" name = "matricula" class="form-control" placeholder="Matrícula" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name = "senha" class="form-control" placeholder="Senha" required>

        <button class="btn btn-lg btn-success btn-block" type="submit">Sign in</button>
        <a href="pags/altera_senha.php">Esqueci minha senha</a>
			</form>
    </div>

  </body>

</html>
