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
                    <p>Registo do Dador</p>
                </div>
                <div class="Formulario">

                    <form action="listagem.php" method="get">
                        <label for="Nome_id"Nome></label>
                            <input type="text" name="nome" id="Nome_id" placeholder="Nome" value="nome">
                            <input type="text"  name="apelido" id="Nome_id" placeholder="Apelido" >
                            <input type="tel"  name="telefone" id="Nome_id" placeholder="Telefone" >
                            <input type="email" name="email" id="Nome_id" placeholder="Email" >
                            <input type ="text" name="endereco" id="Nome_id" placeholder="Endereço" >
                            <select class="a" name="sexo">
                                <Option>Sexo</Option>
                                <Option>Feminino</Option>
                                <Option>Masculino</Option>
                            </select>
                            <select class="a">
                                    <Option>Grupo de Sangue</Option>

                                </select>



                            <input type="text" name="peso" id="Nome_id" placeholder="Peso">
                            <input type="text" name="altura" id="Nome_id" placeholder="Altura">
                            <input type="text" name="" id="Nome_id" placeholder="Nome">
                            <input type="text" name="" id="Nome_id" placeholder="Nome">
                            <input type="text" name="" id="Nome_id" placeholder="Nome">


                            <input type="submit" name="submit" value="Registar" id="btOk" >

                    </form>


                </div>
                </div>


    </div>


 </body>



</html>
