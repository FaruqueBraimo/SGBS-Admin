


 google.charts.load('current', {'packages':['corechart']});
 google.charts.setOnLoadCallback(drawChart);




function abrirJanela(){
    window.open("..Pages/Telaregisto/tela.html",  "status=yes,  width=250px , height=200px");
}
 

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

  var data = google.visualization.arrayToDataTable([
    ['Task', 'Hours per Day'],
    ['HOMENS',     11],
    ['MULHERES',      8],
    
  ]);

  
  var options = {
    title: 'DOAÇÕES'
  };

  var chart = new google.visualization.PieChart(document.getElementById('piechart'));

  chart.draw(data, options);
}

