<?php

include 'login/config.php';
include 'login/verifica_login.php';
include 'login/redirect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SISGE</title>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="dist/css/roboto.min.css" rel="stylesheet">
        <link href="dist/css/material-fullpalette.min.css" rel="stylesheet">
        <link href="dist/css/ripples.min.css" rel="stylesheet">
        <link href="//fezvrasta.github.io/snackbarjs/dist/snackbar.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style type="text/css" class="init">

	body { font-size: 140%; }

	</style>
        
    <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

     <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-table.css">
    


</head>

<body>

    <div id="wrapper">

        <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <span id="menu-brand" class="navbar-brand">sisge app</span>
    </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php" title="Home"><i class="mdi-action-home"></i> </a>
                    </li>
                    <li  class="active">
                        <a href="charts.php" title="Indicadores"><i class="mdi-av-equalizer"></i> </a>
                    </li>
                    <li>
                        <a href="palestras.php" title="Palestras"><i class="mdi-social-school"></i> </a>
                    </li>
                    <li>
                        <a href="participantes.php"  title="Participantes"><i class="mdi-social-people"></i> </a>
                    </li>
                    <li>
                        <a href="certificados.php" title="Certificados"><i class="mdi-image-portrait"></i> </a>
                    </li>
                    <li>
                        <a href="email.php" title="E-mail"><i class="mdi-content-markunread"></i> </a>
                    </li>
                    <li>
                        <a href="rfid.php" title="RFID"><i class="mdi-action-settings-input-antenna"></i> </a>
                    </li>
                       
                    <li>
                        <a href="logs.php" title="Logs"><i class="mdi-action-schedule"></i> </a>
                    </li>
                    <li>
                        <a href="status.php" title="Status" ><i class="mdi-av-play-circle-outline"></i> </a>
                    </li>
                    <li>
                        <a href="login/sair.php" title="Sair"><i class="mdi-content-clear"></i> </a>
                    </li>
                </ul>
        <form class="navbar-form navbar-left">
            <input type="text" class="form-control col-lg-8" placeholder="Buscar">
        </form>
        <ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown">
                <a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $_SESSION['nome_usuario']?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  
                        <li>
                            <a href="login/sair.php"><i class="fa fa-fw fa-power-off"></i> Sair</a>
                        </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
     <div id="wrapper">
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <br><br>
                        <h1 class="page-header">
                            Indicadores
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li>
                                <i class="fa fa-bar-chart-o"></i> Indicadores
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- Flot Charts -->
                <div class="row">
                    <div class="col-lg-12">


                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="jumbotron">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Universidades</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                 <center><div id="chart_pres2" style="width: 600px; height: 300px;"></div></center>
                                </div>

                            </div>
                        </div>
                    </div>
                
                    <div class="col-lg-6">
                        <div class="jumbotron">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Presenças por participantes</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                <center><div id="chart_pres" style="width: 600px; height: 300px;"></div></center>
                                </div>
                                <div class="text-right">

                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                     
                    <div class="col-lg-6">
                        <div class="jumbotron">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Presenças por organizadores</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                <center><div id="chart_presorg" style="width: 600px; height: 300px;"></div></center>
                                    </div>

                                <div class="text-right">

                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-lg-6">
                        <div class="jumbotron">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i>Participantes por dia</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">

                                                                       <center><div id="chart_div6" style="width: 600px; height: 300px;"></div></center>
                                    </div>

                                <div class="text-right">

                                </div>
                            </div>
                        </div>
                    </div>
                     </div>
                     <div class="row">
                    
                    <div class="col-lg-6">
                        <div class="jumbotron">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i>Organização</h3>
                            </div>
                            <div class="panel-body">
    	                               <div class="table-responsive">
                                    <center><div id="piechart2" style="width: 400px; height: 200px;"></div></center>
                                        </div>
    	                           
                             
                                <div class="text-right">

                                </div>
                            </div>
                        </div>
                    </div>
               
                    <div class="col-lg-6">
                        <div class="jumbotron">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Cursos</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                                                <center><div id="piechart" style="width: 400px; height: 200px;"></div></center>
                                       </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="jumbotron">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i></h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                <center><div id="chart_div" style="width: 600px; height: 300px;"></div>Total de participantes e palestras</center>
                                    </div>

                                <div class="text-right">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="jumbotron">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Participantes por palestra </h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                        <center><div id="chart_div3" style="width: 600px; height: 300px;"></div></center>
                            </div>
                                <div class="text-right">

                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->


 

    <!-- Flot Charts JavaScript -->
    <!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
    <script src="js/jquery.min.js"></script>
  <script src="js/jquery.nouislider.min.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap.file-input.min.js"></script>
  <!-- Tema Material Design -->
  <script src="js/ripples.min.js"></script>
  <script src="js/material.min.js"></script>
     <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  
    
<script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {



<?php
$pdo_verifica = $conexao_pdo->prepare('SELECT * FROM cursoparticipante ORDER BY contador DESC');
$pdo_verifica->execute();
$acumulador = 0;
while ($fetch = $pdo_verifica->fetch()) {
	$acumulador = $acumulador + 1;

}
//echo $acumulador;
$conn = mysql_connect("localhost", "rsilv092", "91385616");
$db = mysql_select_db("rsilv092_tcc");

$sql = "SELECT * FROM cursoparticipante ";
$limite = mysql_query($sql);
?>
var data = google.visualization.arrayToDataTable([
          ['Curso', 'Participantes'],
<?php
while ($fetch = mysql_fetch_array($limite)) {

	$contador = $contador + 1;
	echo '[' . "'" . $fetch['curso'] . "'" . ',';
	if ($contador == $acumulador) {
		echo '' . $fetch['numero'] . ']';
	} else {echo '' . $fetch['numero'] . '],';}

}
?>
]);

        var options = {

          title: ''
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    
    
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {


<?php $busca = "SELECT  FROM log ORDER BY contador DESC";?>
          <?php
$pdo_verifica = $conexao_pdo->prepare('SELECT user_id FROM usuarios ORDER BY id DESC');
$pdo_verifica->execute();
$acumulador2 = 0;
while ($fetch = $pdo_verifica->fetch()) {
	$acumulador2 = $acumulador2 + 1;

}
$pdo_verifica = $conexao_pdo->prepare('SELECT id FROM palestra ORDER BY nome DESC');
$pdo_verifica->execute();
$acumulador3 = 0;
while ($fetch = $pdo_verifica->fetch()) {
	$acumulador3 = $acumulador3 + 1;

}

?>
var data = google.visualization.arrayToDataTable([
         ['Participantes por palestras', 'quantidade'],
<?php

echo "['Participantes',";
echo '' . $acumulador2 . "],";
echo "['Palestras',";
echo '' . $acumulador3 . "]";

?>
]);

        var options = {
          title: '',
          colors: ['#009688', '#E53E38'],
          
          vAxis: {title: 'Evento',  titleTextStyle: {color: 'red'}}
        };

        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

        chart.draw(data, options);
      }
    </script>
   

    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart);
function drawChart() {


<?php

$sql = "SELECT nome,numeroparticipantes FROM palestra ";
$limite = mysql_query($sql);
?>
var data = google.visualization.arrayToDataTable([
          ['Palestra', 'Participantes'],
<?php
while ($fetch = mysql_fetch_array($limite)) {

	$contador5 = $contador5 + 1;
	echo '[' . "'" . $fetch['nome'] . "'" . ',';
	if ($contador5 == $acumulador3) {
		echo '' . $fetch['numeroparticipantes'] . ']';
	} else {echo '' . $fetch['numeroparticipantes'] . '],';}

}
?>
  ]);

  var options = {
    title: '',
    colors: ['#009688', '#E53E38'],
    hAxis: {title: 'Palestras', titleTextStyle: {color: 'red'}}
  };

  var chart = new google.visualization.ColumnChart(document.getElementById('chart_div3'));

  chart.draw(data, options);

}
    </script>

    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart);
function drawChart() {


<?php


$sql = "SELECT user_name,presenca FROM usuarios ";
$limite = mysql_query($sql);
?>
var data = google.visualization.arrayToDataTable([
          ['Participante', 'Presenças'],
<?php
while ($fetch = mysql_fetch_array($limite)) {

  $contador5 = $contador5 + 1;
  echo '[' . "'" . $fetch['user_name'] . "'" . ',';
  if ($contador5 == $acumulador3) {
    echo '' . $fetch['presenca'] . ']';
  } else {echo '' . $fetch['presenca'] . '],';}

}
?>
  ]);

  var options = {
    title: '',
    colors: ['#009688', '#E53E38'],
    hAxis: {title: 'Participantes', titleTextStyle: {color: 'blue'}}
  };

  var chart = new google.visualization.ColumnChart(document.getElementById('chart_pres'));

  chart.draw(data, options);

}
    </script>


    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart);
function drawChart() {


<?php

$sql = "SELECT nome,likes,unlike FROM palestra ";
$limite = mysql_query($sql);
?>
var data = google.visualization.arrayToDataTable([
          ['Palestra', 'UFPel','IF-Sul'],
<?php
while ($fetch = mysql_fetch_array($limite)) {

  $contador50 = $contador50 + 1;
  echo '[' . "'" . $fetch['nome'] . "'" . ','.$fetch['likes'].',';
  if ($contador50 == $acumulador3) {
    echo '' . $fetch['unlike'] . ']';
  } else {echo '' . $fetch['unlike'] . '],';}

}
?>
  ]);

  var options = {
    title: '',
    colors: ['#009688', '#E53E38'],
    hAxis: {title: 'Palestras', titleTextStyle: {color: 'blue'},  
    
    }
  };

  var chart = new google.visualization.ColumnChart(document.getElementById('chart_pres2'));

  chart.draw(data, options);

}
    </script>


    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Data/hora', 'Participantes'],

          ['05/10', 10],
          ['06/10', 20],
          ['07/10', 15],
          ['08/10', 20],
          ['09/10', 20]

        ]);

        var options = {
          title: '',
          colors: ['#009688', '#E53E38'],
          hAxis: {title: 'Data',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div6'));
        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart);
function drawChart() {


<?php

        $sql = "SELECT * FROM usuarios ";
        $limite = mysql_query($sql);
        ?>
        var data = google.visualization.arrayToDataTable([
                  ['Participante', 'Presenças'],
        <?php
        while ($fetch = mysql_fetch_array($limite)) {

          $contador13 = $contador13 + 1;
          if ($fetch['opcao'] == 2){
          echo '[' . "'" . $fetch['user_name'] . "'" . ',';
          if ($contador13 == $acumulador3) {
            echo '' . $fetch['presenca'] . ']';
          } else {echo '' . $fetch['presenca'] . '],';}
        }
        }
?>
  ]);

  var options = {
    title: '',
    colors: ['#009688', '#E53E38'],
    hAxis: {title: 'Organizadores', titleTextStyle: {color: 'blue'}}
  };

  var chart = new google.visualization.ColumnChart(document.getElementById('chart_presorg'));

  chart.draw(data, options);

}
    </script>
<script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {

<?php
        $pdo_verifica = $conexao_pdo->prepare('SELECT * FROM usuarios ORDER BY id DESC');
        $pdo_verifica->execute();
        $acumulador7 = 0;
        $acumulador8 = 0;
        while ($fetch = $pdo_verifica->fetch()) {
        	if ($fetch['opcao'] == 1) {
        		$acumulador7 = $acumulador7 + 1;
        	} else { $acumulador8 = $acumulador8 + 1;}

        }

?>
var data = google.visualization.arrayToDataTable([
          ['Tipo', 'Quantidade'],
<?php

          echo "['Organização',";
          echo '' . $acumulador8 . "],";
          echo "['Participantes',";
          echo '' . $acumulador7 . "]";

?>
]);

        var options = {
          colors: ['#009688', '#E53E38'],
          title: '',
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

        chart.draw(data, options);
      }
    </script>

</body>

</html>
