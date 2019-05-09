<<?php


/**
 *
 */
class Exemplo

{

  private $pdo;


public  function __construct($dbname,$host,$user,$senha)
  {


    try {

$this->$pdo = new PDO ("msql:dbname =" .$dbname."; host =".$host,$user,$senha);

    } catch (PDOException $e) {

echo  "Erro com a base de dados";

    }


  }


 public function listarDadores()
{
  // code...

 $conexao = new  PDO("mysql:host = localhost;dbname=sgbs", "root","");

$res = array();
$cmd = $conexao->query("SELECT  nome,dataNasc,genero,tipoDeSangue,endereco,telefone,email,peso FROM dadores");


$res = $cmd ->fetchAll(PDO::FETCH_ASSOC);
return $res;







}



}







 ?>
