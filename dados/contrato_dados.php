<?php
include_once 'conexao.php';
include_once '../classes/contrato_class.php';
include_once '../classes/aluno_class.php';
include_once '../classes/empresa_class.php';
session_start();

$matricula = $_POST['matricula'];
$cnpj = $_POST['cnpj'];

$contrato = new Contrato();
  $contrato -> setAluno($_POST['aluno']);
  $contrato -> setCpf($_POST['cpf']);
  $contrato -> setMatricula($matricula);
  $contrato -> setEmpresa($_POST['empresa']);
  $contrato -> setCnpj($_POST['cnpj']);
  $contrato -> setTelefone($_POST['telefone']);
$aluno = new Aluno();
  $aluno -> setAluno($_POST['aluno']);
  $aluno -> setCpf($_POST['cpf']);
  $aluno -> setMatricula($_POST['matricula']);
  $aluno -> setCurso($_POST['curso']);
  $aluno -> setTurma($_POST['turma']);
  $aluno -> setSetor($_POST['setor']);
$empresa = new Empresa();
  $empresa -> setEmpresa($_POST['empresa']);
  $empresa -> setCnpj($_POST['cnpj']);
  $empresa -> setRamo($_POST['ramo']);
  $empresa -> setTelefone($_POST['telefone']);
  $empresa -> setRemneracao($_POST['valor']);
  $empresa -> setDuracao($_POST['tempo']);
  $empresa -> setCarga($_POST['carga']);

  $sql = mysql_query("SELECT * FROM contratos WHERE matricula ='$matricula' AND cnpj = '$cnpj'") or die (mysql_error());
  $row = mysql_num_rows($sql);

 if($row > 0){
   $_SESSION['error'] = "Já existe um contrato com essas informações!";
   header("Location:../pags/site.php?pagina=contrato");
 }else{
   $aluno -> insereAluno();
   $empresa -> insereEmpresa();
   $contrato -> insereContrato();
   $_SESSION['success'] = "Contrato cadasrado com susseço!";
   header("Location:../pags/site.php?pagina=contrato");
 }
 ?>
