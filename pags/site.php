<?php
    session_start();
	if(!isset($_SESSION["autenticado"]) || !isset($_SESSION["matricula"])){
		header ("Location:index.php?erro=2");
		}

?>
<html>
<head>
<meta charset = "utf-8">
<title>Sistema Integração Estágio</title>
<link rel = "icon" type = "image/x-icon" href = "../src/pag.png">
<link rel = "stylesheet" href = "../css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.navbar {
    margin-bottom: 0;
    background-color: #00cc00;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
}

.navbar li a, .navbar .navbar-brand {
    color: #fff !important;
}

.navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;
}

.navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
}
.div_principal{
margin-left:10px;
margin-top:70px;
width:1240px;
height:530px;
}
</style>
<script language ="JavaScript">
function confirmar()
{
if (!confirm ("Excluir Usuário?"))
history.go(-1);
return " "
document.write (confirmar())
}
</script>
</head>

<body>
  <nav class="navbar navbar-default navbar-fixed-top">
   <div class="container">
     <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
       <a class="navbar-brand">Sistema Integração</a>
     </div>
     <div class="collapse navbar-collapse" id="myNavbar">
       <ul class="nav navbar-nav navbar-right">
         <li><a href="?pagina=home">Pagína Inicial</a></li>
         <li><a href="?pagina=contrato">Novo Contrato</a></li>
         <li><a href="?pagina=avaliacao">Avaliar Contrato</a></li>
         <li><a href="?pagina=new_user">Novo Usuário</a></li>
         <li><a href="../dados/logoff.php"onClick="return confirm('Deseja realmente sai do site?');">Sair</a></li>
       </ul>
     </div>
   </div>
 </nav>

  <div class="div_principal">
  <?php
  include "../dados/conteudo.php";
  ?>
</div></br>

<footer class="container-fluid text-center">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Criado por Rennan Douglas de Oliveira Machado</p>
</footer>


</body>
</html>
