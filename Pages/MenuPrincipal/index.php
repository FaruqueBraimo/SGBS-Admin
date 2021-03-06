<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
<link rel="icon" type="imagem/png" href="resources/foto-3.png" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="fonteAwessome/css/fontawesome-all.min.css">
 <link rel="stylesheet" type="text/css" href="css/style.css">

 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 <meta  name="Author" content="Faruque">
<title  >Admin's Home Pages</title>










<script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ['MONTH', 'Mulheres', 'Homens'],
            ['JAN',   200,      400],
            ['FEV',   100,      300],
            ['MAR',  100,       100],
            ['APR',  80,      5],
            ['JUN',  20,      99],
            ['JUL',  30,      2],
            ['AGO',  60,      78],
            ['SET',  90,      0],
            ['OCT',  50,      30],
            ['NOV',  20,      260],
            ['DEC',  30,      10],
          ]);
          var options = {
            curveType: 'function',
            title: 'AGENDAMENTOS POR MÊS',
            legend: { position: 'bottom' }
          };
          var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
          chart.draw(data, options);
        }
      </script>



</head>





<body>



   <div class="contentor">


                <header id="hdr">

                                <div class="imagem">
                                <img src="blood.jpg" id="img">
                             </div>



                        </header>


                        <main id="main">
                        <div class="header2">
                                <h1>Painel Principal</h1>
                                <p id="viz">Visualize aqui as informações sobre agendamentos e doações</p>
                        </div>
                        <div class="nav">


                        <p class="navTit">Cadastros</p>

                                <a  id="navDador" class="links" href="../TelaListagem/listagenDador.php">Doador<BR>
                                <a   id="doacoesID" class="links"  href="../TelaListagem/listagemDoacao.php"> Doação </a>
                                <a  id="sangueID" class="links"  href="../TelaListagem/listagemSangue.php"> Sangue </a>
                                <a   id="uuarioID" class="links"  href="../TelaListagem/listagemUsuario.php"> Usuário </a><br>

                                <a class="" href="">  </a><BR>
                                <p class="navTit">Notificações</p><br>
                                <p class="navTit">Relatorios</p><br>
                                <p class="navTit">Definições</p>






                </div>



                        <div class="meio">

                                <div id="bx1">
                                  <span style="font-size: 3rem; text-align:center">
                                    <span style="color: Mediumslateblue;">
                                    <i class="far fa-calendar-alt"></i>
                                    </span>
                                  </span>
                                        Agendamentos




                                      </div>
                                <div id="bx2">

                                                                    <span style="font-size: 3rem; text-align:center">
                                                                      <span style="color: #39CCCC;">
                                                                      <i class="far fa-calendar-check"></i>
                                                                      </span>
                                                                    </span>




                                  Agendamentos Confirmados




                                </div>
                                <div id="bx3"  >
                                  <span style="font-size: 3rem; text-align:center">
                                    <span style="color: #001f3f;">
                                  <i class="fas fa-user-check"></i>
                                    </span>
                                  </span>
                                  Doadores Atendidos</div>


                                <div id="bx4">

                                    <span style="font-size: 3rem; text-align:center">
                                      <span style="color: #0074D9;">
                                        <i class="fas fa-user-minus"></i>                                      </span>
                                    </span>


                                  <br>Doadores que faltaram</div>
                                <div id="bx5">
                                  <span style="font-size: 3rem; text-align:center">
                                    <span style="color: #C0602B;">
                                      <i class="fas fa-user-times"></i>
                                    </span>
                                  </span>
                                <br>  Doadores Reprovados</div>
                                <div id="bx6">

                                  <span style="font-size: 3rem; text-align:center">
                                    <span style="color: #A42153;">
                                    <i class="far fa-calendar-times"></i>
                                    </span>
                                  </span>
                                  Agendamentos Cancelados</div>




                        </div>



                        <div class="graficos">


                                <div id="curve_chart" style="width: 640px; height: 300px"></div>
                                <div id="piechart" style="width: 500px; height: 200px;"></div>




                                <div class="totais">

                                        <P id="tot">Totais</P>
                                        <div id="agendamentos">
                                                <span class="totVal">5</span>
                                                <p>Agendamentos</p>

                                        </div>

                                        <div id="litros">
                                                        <span class="totVal">5</span>
                                                        <p>Litros doados</p>


                                                </div>



                                </div>

                                 </div>






                        </main>


                        <!-- <footer id="ft">3</footer> -->


   </div>














</body>





















<script src ="js/script.js"> </script>
</html>
