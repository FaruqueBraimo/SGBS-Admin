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
                    <p>Registo de Doação</p>
                </div>
                <div class="Formulario">

                    <form action="listagem.php" method="get">

                            <select class="a" name="sexo">
                              <Option>Doador</Option>
                                <Option>Faruque</Option>
                                <Option>Jose</Option>
                            </select>
                            <input type="text" name="qtd" id="Nome_id" placeholder="Quantidade de Sangue">
                            <input type="text" name="qtd" id="Nome_id" placeholder="Outro">

                           <label class="c"> Observacao</label>
                            <textarea class="b" name="desc" placeholder="observacao">

                            </textarea>
                            <input type="submit" name="submit" value="Registar" id="btOk" >

                    </form>


                </div>
                </div>


    </div>


 </body>



</html>
