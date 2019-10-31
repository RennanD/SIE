<?php

include_once('../dados/conexao.php');
$res_estagio = "SELECT * FROM";
mysql_query($res_estagio);
$result = mysql_query("SELECT * FROM contratos");
?>
<html>
<head>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.form-inline{
  width: 300px;
}
.form-horizontal{
  margin-bottom: 400px;
}
.form-inline h2{
  color:#00cc00;
}
.form-control sel1{
  width: 80px;
}
#sel1{
  width: 80px;
}
</style>
<meta charset = "utf-8">
</head>
<script language ="JavaScript">
function confirmar()
{
if (!confirm ("Excluir Usuário?"))
history.go(-1);
return " "
document.write (confirmar())
}
</script>
<body>
  <from class="form-inline">
  <h2>Estágios:</h2>
  <div class="form-group">

        <input type="text" class="form-control" placeholder="Pesquisa">
        </div>
  <button type="submit" class="btn btn-default">Buscar</button>
</form>
  <div class="form-horizontal">
    <p class ="text-center text-danger">
    <?php
     if(isset($_SESSION['sucess'])){
       echo $_SESSION['sucesso'];
       unset($_SESSION['sucesso']);
     }
     ?>
   </p>
          <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Estagiário</th>
                  <th>CPF</th>
                  <th>Matrícula</th>
                  <th>Empresa</th>
                  <th>CNPJ</th>
                  <th>Telefone</th>
                </tr>
              </thead>
              <tbody>
  			<?php while($row_user = mysql_fetch_assoc($result)) {?>
                <tr>
                  <td><?php echo $row_user['id']?></td>
                  <td><?php echo $row_user['aluno']?></td>
                  <td><?php echo $row_user['cpf']?></td>
                  <td><?php echo $row_user['matricula']?></td>
                  <td><?php echo $row_user['empresa']?></td>
                  <td><?php echo $row_user['cnpj']?></td>
                  <td><?php echo $row_user['telefone']?></td>
  				<td name = "matricula">
            <a href = "#" class="btn btn-success btn-sm" id="myBtn">Avaliar</a>
            <a href="../dados/avalia_dados.php?id=<?php echo $row_user['id']; ?>&acao=ver" 
            class="btn btn-primary btn-sm" >Ver</a>
            <a href="../dados/avalia_dados.php?id=<?php echo $row_user['id']; ?>&acao=excluir"
            onClick="return confirm('Deseja realmente excluir esse usuario?');" class="btn btn-danger btn-sm" >Excluir</a>
          </td>

                </tr>
                </tr>
  			<?php }?>
              </tbody>
            </table>


</body>
</html>
