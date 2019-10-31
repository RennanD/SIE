<html>
<head>

<meta charset = "utf-8">
<style>
.form-horizontal input{
	width:400px;
}
.form-horizontal{
	margin-bottom: 320px;
}
.form-horizontal h3{
	color:#00cc00;
}
</style>
</head>
<body>
	<p class ="text-center text-danger">
		<?php
		 if(isset($_SESSION['error'])){
			 echo $_SESSION['error'];
			 unset($_SESSION['error']);
		 }
		 ?>
	 </p>
	 <p class="text-center text-success">
		 <?php
		 if(isset($_SESSION['success'])){
			 echo $_SESSION['success'];
			 unset($_SESSION['success']);
		 }
			?>
		</p>
	<form class="form-horizontal" action="../dados/new_dados.php" method = "post">
<h3>Novo Usuário</h3>
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="usuario"placeholder="Nome" required autofocus>
		</div>
		<label for="inputEmail3" class="col-sm-2 control-label">Matrícula</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="matricula"placeholder="Matrícula" required>
		</div>
		<label for="inputEmail3" class="col-sm-2 control-label">Senha</label>
		<div class="col-sm-10">
			<input type="password" class="form-control" name="senha"placeholder="Senha" required><br>
		</div>

		<div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-success">Cadastrar</button>
				<a href = "?pagina=list_user" class="btn btn-success">Listar Usuários</a>
	    </div>
	  </div>

</form>

</body>
</html>
