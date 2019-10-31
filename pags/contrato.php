<html>
	<head>
	<meta charset = "utf-8">
  <style>
	.form-horizontal input{
		width:400px;
	}
	.form-horizontal h3{
		color:#00cc00;
	}
	</style>
	</head>
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
	<body>
		<form class="form-horizontal" action="../dados/contrato_dados.php" method = "post">

<h3>Aluno</h3>
		<div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="aluno"placeholder="Nome" autofocus required>
	    </div>
			<label for="inputEmail3" class="col-sm-2 control-label">Curso</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="curso"placeholder="Curso" required>
			</div>
			<label for="inputEmail3" class="col-sm-2 control-label">Turma</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" required name="turma" placeholder="Turma" required>
	    </div>
			<label for="inputEmail3" class="col-sm-2 control-label">Matrícula</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="matricula"placeholder="Matrícula" required>
	    </div>
			<label for="inputEmail3" class="col-sm-2 control-label">Cpf</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="cpf"placeholder="Cpf" required>
	    </div>
			<label for="inputEmail3" class="col-sm-2 control-label">Setor</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="setor"placeholder="Setor a trabalhar" required>
	    </div>
	  </div>

<h3>Empresa/Estágio</h3>
		<div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="empresa"placeholder="Nome" required>
	    </div>
			<label for="inputEmail3" class="col-sm-2 control-label">CNPJ</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="cnpj"placeholder="Cnpj" required>
			</div>
			<label for="inputEmail3" class="col-sm-2 control-label">Ramo</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="ramo" placeholder="Ramo de atividade" required>
	    </div>
			<label for="inputEmail3" class="col-sm-2 control-label">Telefone</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="telefone"placeholder="Telefone" required>
	    </div>
			<label for="inputEmail3" class="col-sm-2 control-label">Remuneração</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="valor"placeholder="Remuneração" required>
	    </div>
			<label for="inputEmail3" class="col-sm-2 control-label">Duração</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="tempo"placeholder="Duração do Estágio" required>
	    </div>
			<label for="inputEmail3" class="col-sm-2 control-label">Carga</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="carga"placeholder="Carga Horária" required></br>
	  </div>

		<div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-success">Cadastrar</button>
	    </div>
	  </div>

	</form>

	</body>
</html>
