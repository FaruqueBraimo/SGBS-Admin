<?php

require_once  'Exemplo.php';

$exemplo = new Exemplo("sgbs","localhost","root", "");







 ?>



<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
<link rel="icon" type="imagem/png" href="resources/foto-3.png" />
<link rel="stylesheet" type="text/css" href="css/styleRegistro.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
 <meta  name="Author" content="Faruque">

 </head>






 <body>





    <div class="registro_Dador">



      <div class="reg_info">
        <span style="font-size: 2rem; text-align:center" ; >
          <span style="color: white;">
            <i class="fas fa-user"></i>
            Doadores
          </span>

          </div>

<div class="filtros">
  <p> Filtros </p>
<form>

  <input type="text" name="nome" id="Nome_id" placeholder="Nome" >
  <input type="text"  name="apelido" id="Nome_id" placeholder="Grupo sanguineo" >
  <span style="font-size: 1rem; text-align:center" ; >

      <input type="submit"  name="pesquisa" id="pesquisa"  value="Ok">




<form>



<a  class="aPlus"   href="../TelaRegisto/telaDador.php">

  <span style="font-size: 1rem; text-align:center" ; >
    <span style="color: white;">
   <i class="fas fa-plus"></i>
    </span>

 </a>






</div>












    <div class="container">


<table>

    <thead>


          <tr>


            <th>
            Nome

            </th>


            <th>
             Data Nasc
            </th>





            <th>
              Gênero


            </th>


            <th>
              Grupo Sanguineo


            </th>



            <th>
                Endereço


            </th>




            <th>
  Telefone
            </th>


            <th>
    Email
            </th>

            <th>
    peso
            </th>




            <th>
      Accao
            </th>



          </tr>


<tbody>
  <?php


  $dados =  $exemplo ->listarDadores();

  if ( count ($dados) > 0){

    for ($i=0; $i < count ($dados) ; $i++) {
      // code...

  echo "<tr>";
  foreach ($dados[$i] as $k=> $v) {

    if ( $k != "cod_dador"){

  echo "<td > $v</td>";


    }
  }

?>
<td>

    <a class="" href = "#">
      <span style="font-size: 1.7rem; text-align:center" ; >
        <span style="color: #001f3f;">
         <i class="far fa-edit"></i>
        </span>


       </a>



        <a href = "#" class="" id="Excluir" >

          <span style="font-size: 1.7rem; text-align:center" ; >
            <span style="color: #FF4136;">
             <i class="far fa-trash-alt"></i>
            </span>


        </a>


    </td>
<?php
   echo "</tr>";


    }



  }

?>



  <!-- <tr>


  <td>Faruque</td>
  <td>Faruque</td>
  <td>Faruque</td>
  <td>Faruque</td>
  <td>Faruque</td>
  <td>Faruque</td>
  <td>Faruque</td>


  </tr>




<tr>

<td> <span class="photo"> F1S </span> Faeuque</td>
<td>Faruque</td>
<td>Faruque</td>
<td>Faruque</td>
<td>Faruque</td>
<td>Faruque</td>
<td>Faruque</td>
<td>Faruque</td>

</tr>
<tr>

<td> <span class="photo"> F1S </span> Faeuque</td>
<td>Faruque</td>
<td>Faruque</td>
<td>Faruque</td>
<td>Faruque</td>
<td>Faruque</td>
<td>Faruque</td>
<td>Faruque</td>

</tr>
<tr>

<td> <span class="photo"> F1S </span> Faeuque</td>
<td>Faruque</td>
<td>Faruque</td>
<td>Faruque</td>
<td>Faruque</td>
<td>Faruque</td>
<td>Faruque</td>
<td>Faruque</td>

</tr>

<tr>

<td> <span class="photo"> F1S </span> Faeuque</td>
<td>Faruque</td>
<td>Faruque</td>
<td>Faruque</td>
<td>Faruque</td>
<td>Faruque</td>
<td>Faruque</td>
<td>Faruque</td>

</tr> -->




</tbody>

  </thead>




</table>




                </div>


    </div>


<div class="botoes">




<a href="#" class="b">

  <span style="font-size: 1rem; text-align:center" ; >
    <span style="color: ;">
<i class="fas fa-chevron-left"></i>
    </span>

 </a>






 <a href="#" class="b">
 1

  </a>

  <a href="#" class="b">
  2

   </a>
   <a href="#" class="b">
   3

    </a>



 <a href="#" class="b">

   <span style="font-size: 1rem; text-align:center" ; >
     <span style="color:;">
 <i class="fas fa-chevron-right"></i>
     </span>

  </a>






</div>

 </body>




</html>
