<?php
class Usuario{
private $usuario;
private $matricula;
private $senha;



public function FunctionName($value=''){
  #
}
 public function __construct(){

 }

public function setUser($usuario){
  $this-> usuario = $usuario;
}
public function getUser(){
  return   $this->usuario;
}

public function setMatricula($matricula){
    $this-> matricula = $matricula;
}
public function getMatricula(){
  return   $this->matricula;
}

public function setSenha($senha){
    $this-> senha = $senha;
}
public function getSenha(){
  return   $this->senha;
}

}
?>
