
<?php

class Dador



{



    private $cod_dador;
    private $nome;
    private $apelido;
    private $email;
    private $genero;
    private $tipoDeSangue;
    private $endereco;
    private $data_Nasc;
    private $peso;
    private $altura;
    private $ocupacao;



    public function setOcupacao($ocupacao)
    {
      // code...
    $this-> ocupacao = $ocupacao;

    }

    public function getOcupacao()
    {
      // code...
      return  $this->$ocupacao;
    }




    public function setAltura($altura)
    {
      // code...
    $this-> altura = $altura;

    }

    public function getAltura()
    {
      // code...
      return  $this->$altura;
    }


    public function setPeso($peso)
    {
      // code...
    $this-> peso = $peso;

    }

    public function getPeso()
    {
      // code...
      return  $this->$peso;
    }



    public function setDataNasc($data_Nasc)
    {
      // code...
    $this-> data_Nasc = $data_Nasc;

    }

    public function getDataNasc()
    {
      // code...
      return  $this->$data_Nasc;
    }



    public function setEndereco($endereco)
    {
      // code...
    $this-> endereco = $endereco;

    }

    public function getEndereco()
    {
      // code...
      return  $this->$endereco;
    }





    public function setTipoSangue($tipoDeSangue)
    {
      // code...
    $this-> tipoDeSangue = $tipoDeSangue;

    }

    public function gettipoDeSangue()
    {
      // code...
      return  $this->$tipoDeSangue;
    }



public function setCodDador($cod_dador)
{
  // code...
$this-> cod_dador = $cod_dador;

}

public function getCodDador()
{
  // code...
  return  $this->cod_dador;
}


public function setNome($nome){

  $this-> nome = $nome;

}




public function getNome(){


  return $this->nome;
}

public function setEmail($email){

  $this->email= $email;

}

public function getEmail(){
  return $this->email;
}


public function setGenero($genero){
  $this->genero = $genero;
}

public function getGenero(){
  return $this->genero;
}


public function getApelido(){
  return $this->apelido;
}

//
public function setApelido($apelido){

        $this -> apelido = $apelido;


}
//



public function printDetais(){
  return "o apelido e {$this->apelido}";

}

}

/// teste conexao

try {

$conexao =  new PDO('mysql:host=127.0.0.1;dname= sgbs','root','');
$conexao->  setAtributte(PDO::ATTR_ERRMODE,PDO:ERRMODE_EXCEPTION);

} catch (PDOException $e) {

  echo $e-> getMessage;
  die();

}





$d1 = new Dador();
$d1 -> setApelido("Braimo");
echo $d1-> getApelido() ;



?>
