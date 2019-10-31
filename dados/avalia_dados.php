<?php
include_once "../dompdf/autoload.inc.php";
include_once '../classes/contrato_class.php';
session_start();

$acao = $_GET['acao'];
$contrato = new Contrato();
$contrato -> setId($_GET['id']);
if($acao == "excluir"){
  $contrato -> deletaContrato();
  $_SESSION['sucesso'] = "Contrato excluido com susseço!";
  header("Location:../pags/site.php?pagina=avaliacao");
}
elseif ($acao == "ver") {
$contrato->vizualizaContrato();
}
else {

}
 ?>
