

<<?php



/**
 *
 */
class Doacao


{
private $cod_doacao;
private $data_doacao;
private $qtdSangue;
private $cod_dador;
private $observacao;





        public function setQtdSangue($qtdSangue)
        {
          // code...
        $this-> qtdSangue = $qtdSangue;

        }

        public function getQtdSangue()
        {
          // code...
          return  $this->$qtdSangue;
        }





      public function setCodDoacao($cod_doacao)
      {
        // code...
      $this-> cod_doacao = $cod_doacao;

      }

      public function getCodDoacao()
      {
        // code...
        return  $this->$cod_doacao;
      }




      public function setCodDador($cod_dador)
      {
        // code...
      $this-> $cod_dador = cod_dador;

      }

      public function getCodDador()
      {
        // code...
        return  $this->$cod_dador;
      }


      public function setDataDoacao($data_doacao)
      {
        // code...
      $this-> dataDoacao = $data_doacao;

      }

      public function getDataDoacao()
      {
        // code...
        return  $this->$data_doacao;
      }



}




 ?>
