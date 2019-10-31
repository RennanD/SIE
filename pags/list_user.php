<?php
include_once('../dados/conexao.php');
$res_user = "SELECT * FROM";
mysql_query($res_user);
$res = mysql_query("SELECT * FROM usuarios");
?>
<html>
<head>
<meta charset = "utf-8">
</head>
<body>
<div class = "container">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Usuário</th>
                <th>Matricula</th>
              </tr>
            </thead>
            <tbody>
			<?php while($row_user = mysql_fetch_assoc($res)) {?>
              <tr>
                <td><?php echo $row_user['id']?></td>
                <td><?php echo $row_user['nome']?></td>
                <td><?php echo $row_user['matricula']?></td>
				<td name = "matricula">
        <a class = "btn btn-danger" href = "../dados/delete_user.php?id=<?php echo $row_user['id']; ?>" >Excluir</button></td>
              </tr>
              </tr>
			<?php }?>
            </tbody>
          </table>
		  <div class = "container">
		  <a href = "?pagina=new_user" class = "btn btn-success">Voltar</a>
		  </div>
			<p class ="text-center text-danger">
			<?php
       if(isset($_SESSION['excluido'])){
				 echo $_SESSION['excluido'];
				 unset($_SESSION['excluido']);
			 }
			 ?>
		 </p>

</div>
</body>
</html>
