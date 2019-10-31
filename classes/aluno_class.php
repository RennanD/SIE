<?php
include_once'../dados/conexao.php';
include_once 'contrato_class.php';
class Aluno extends Contrato{

  public function insereAluno(){
    $insert_aluno = mysql_query("INSERT INTO aluno(nome,curso,tuma,matricula,cpf,setor)
VALUES (
'".$this->getAluno()."',
'".$this->getCurso()."',
'".$this->getTurma()."',
'".$this->getMatricula()."',
'".$this->getCpf()."',
'".$this->getSetor()."')");
echo $this->getAluno();
  }
private $curso;
private $turma;
private $setor;

 public function setCurso($curso){
   $this -> curso = $curso;
 }
public function getCurso(){
   return $this -> curso;
}
public function setTurma($turma){
  $this -> turma = $turma;
}
public function getTurma(){
  return $this -> turma;
}

public function setSetor($setor){
  $this -> setor = $setor;
}
public function getSetor(){
  return $this -> setor;
}

 }
?>
