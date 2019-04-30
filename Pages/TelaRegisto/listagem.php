
<?php


try {
  $conexao = new  PDO("mysql:host = localhost;dbname=sgbs", "root","");

} catch (PDOException $e) {
  echo  $e->getMessage();

}



$nome    = $_GET['nome'];
$apelido = $_GET["apelido"];
$email =  $_GET["email"];
$sexo =  $_GET["sexo"];
$telefone = $_GET["telefone"];
$endereco = $_GET["endereco"];
$peso =    $_GET["peso"];
$altura =   $_GET["altura"];
$tipoDeSangue = $_GET["apelido"];



if (isset($_GET["submit"]) ) {



$apagar = $conexao->prepare("DELETE *FROM dadores where apelido = 'Abu'");
$apagar->execute();
   $Inserir = $conexao->prepare("INSERT INTO dadores(nome,apelido,email,genero,telefone,endereco,altura,peso) VALUES ('$nome','$apelido','$email','$sexo','$telefone',
  '$endereco','$altura','$peso') ");
  $Inserir->execute();



  $query = $conexao->query("SELECT *FROM dadores");


  while ($r = $query->fetch()) {
  echo $r['apelido'] ,'<br>' ;

  }

}



 ?>
