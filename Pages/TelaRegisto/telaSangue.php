<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
<link rel="icon" type="imagem/png" href="resources/foto-3.png" />
 <link rel="stylesheet" type="text/css" href="css/styleRegistro.css"/>
 <script src ="js/script.js"> </script>

 <meta  name="Author" content="Faruque">

 </head>





 <body>


    <div class="registro_Dador">

    <div class="container">
            <div class="reg_info">
                    <p>Registo de Sangue</p>
                </div>
                <div class="Formulario">

                    <form action="listagem.php" method="get">


                      <input type="text" name="nome" id="Nome_id" placeholder="Nome">
                      <input type="text" name="qts" id="Nome_id" placeholder="Quantidade disponivel">
<br>
                      <label  id="prz"> Prazo</label><br>
                      <input type="date" name="dataDoacao" id="Nome_id" placeholder="Peso" id ="data"><br>

                      <label  id="prz"> Descricao</label><br>

                      <textarea class="sangueDescricao" name="desc" placeholder="observacao" cols="85" rows="5">

                      </textarea>



                            <input type="submit" name="submit" value="Registar" id="btOk" >

                    </form>


                </div>
                </div>


    </div>


 </body>



</html>
