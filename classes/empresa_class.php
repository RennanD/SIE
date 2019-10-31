<?php
include_once '../dados/conexao.php';
include_once 'contrato_class';
 ?>
<?php
  class Empresa extends Contrato{

   private $ramo;
   private $remuneracao;
   private $duracao;
   private $carga;


    public function setRamo($ramo){
      $this -> ramo = $ramo;
    }
    public function getRamo(){
      return $this -> ramo;
    }
    public function setRemneracao($remuneracao){
      $this -> remuneracao = $remuneracao;
    }
    public function getRemuneracao(){
      return $this -> remuneracao;
    }
    public function setDuracao($duracao){
      $this -> duracao = $duracao;
    }
    public function getDuracao(){
      return $this -> duracao;
    }
    public function setCarga($carga){
      $this -> carga = $carga;
    }
    public function getCarga(){
      return $this -> carga;
    }

    public function insereEmpresa(){
      $insereEmpresa = mysql_query("INSERT INTO empresa (nome,cnpj,ramo,telefone,rumuneracao,duracao,carga)
      VALUES (
        '".$this->getEmpresa()."',
        '".$this->getCnpj()."',
        '".$this->getRamo()."',
        '".$this->getTelefone()."',
        '".$this->getRemuneracao()."',
        '".$this->getDuracao()."',
        '".$this->getCarga()."')");

        }
  }

?>
