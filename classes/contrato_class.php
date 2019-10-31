<?php
include_once "../dompdf/autoload.inc.php";
include_once '../dados/conexao.php';
use Dompdf\Dompdf;
 class Contrato {
   var $html = "";
   private $id;
   private $aluno;
   private $cpf;
   private $matricula;
   private $empresa;
   private $cnpj;
   private $telefone;

    public function insereContrato(){
      $insert_contrato = mysql_query("INSERT INTO contratos (aluno,cpf,matricula,empresa,cnpj,telefone)
  VALUES (
'".$this->getAluno()."',
'".$this->getCpf()."',
'".$this->getMatricula()."',
'".$this->getEmpresa()."',
'".$this->getCnpj()."',
'".$this->getTelefone()."')");
    }

    public function deletaContrato(){
    $delete = mysql_query("DELETE FROM contratos WHERE id ='".$this->getId()."'");
    $delete_aluno = mysql_query("DELETE FROM aluno WHERE id ='".$this->getId()."'");
    $delete_empresa = mysql_query("DELETE FROM empresa WHERE id ='".$this->getId()."'");
    }

   public function vizualizaContrato(){
     $result_aluno = mysql_query("SELECT * FROM aluno");
     while ($row_estagioA = mysql_fetch_assoc($result_aluno)){



     $dompdf = new DOMPDF();
     $dompdf->load_html("
            <h1 style ='text-align:center'>Contrato</h1>
            <h2>Estagiário:</h2> <h3>".$row_estagioA['nome']."</h3></br>
            <h2>Matrícula:</h2><h3>".$row_estagioA['matricula']."</h3>
            <h2>Cpf:</h2> <h3>".$row_estagioA['cpf']."</h3></br>
            <h2>Setor a trabalhar:</h2> <h3>".$row_estagioA['setor']."</h3>
     ");
     $dompdf->render();
     $dompdf->stream("teste.pdf",array("Attachment" => false));
   }

}
   public function __construct(){

   }

   public function getHtml(){
        return $this -> html;
   }
   public function getAluno(){
        return $this -> aluno;
   }
   public function getCpf(){
        return $this -> cpf;
   }
   public function getMatricula(){
        return $this -> matricula;
   }
   public function getEmpresa(){
        return $this -> empresa;
   }
   public function getCnpj(){
        return $this -> cnpj;
   }
   public function getTelefone(){
        return $this -> telefone;
   }
   public function getId(){
        return $this -> id;
   }

   public function setAluno($aluno){
     $this -> aluno = $aluno;
   }
   public function setCpf($cpf){
     $this -> cpf = $cpf;
   }
   public function setMatricula($matricula){
     $this -> matricula = $matricula;
   }
   public function setEmpresa($empresa){
     $this -> empresa = $empresa;
   }
   public function setCnpj($cnpj){
     $this -> cnpj = $cnpj;
   }
   public function setTelefone($telefone){
     $this -> telefone = $telefone;
   }
   public function setId($id){
     $this -> id = $id;
   }
   public function setHtml($html){
     $this -> html = $html;
   }
 }

 ?>
