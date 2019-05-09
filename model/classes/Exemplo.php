<<?php


/**
 *
 */
class Exemplo

private $pdo;
{

public  function __construct($dbname,$host,$user,$senha)
  {


    try {

$this->$pdo = new PDO ("msql:dbname =" .$dbname."; host ="$host,$user,$senha);

    } catch (PDOException $e) {

echo  "Erro com a base de dados";

    }


  }


 public function listarDadores()
{
  // code...



$res = array();

$cmd =  $this->$pdo->prepare("SELECT *FROM Doadores ORDER BY nome");
$res = $cmd ->fetchAll(PDO::FETCH_ASSOC);
return $res;






}



}







 ?>
