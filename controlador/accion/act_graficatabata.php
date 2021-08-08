<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graficas</title>
    <link rel="stylesheet" href="../../vista/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../vista/css/bootstrap.css">
	<link rel="stylesheet" href="../../vista/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="../../vista/css/bootstrap-reboot.min.css">
	
    <script src="../../vista/js/librerias/jquery-3.3.1.min.js"></script>
    <script src="../../lib/plotlyj/plotly-2.3.0.min.js"></script>
</head>
<body>
<form align="center" action="act_vertabata.php" method="post">  
    <input align="center" type="submit" class="btn btn-success" value="Ver Tabatas" > </form>   <form align="center" action="../../vista/tabata.php" method="post">  
    <input align="center" type="submit" class="btn btn-primary" value="Inicio" > </form> 
<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-primary">
					<div class="panel panel-heading">
                  
                    <h4 class="h3 mb-3 font-weight-normal">Graficas del tabata del usuario </h4> 
                        <p></p>
					</div>
					<div class="panel panel-body">
						<div class="row">
							<div class="col-sm-6">
								<div id="cargaLineal"></div>
							</div>
							<div class="col-sm-6">
								<div id="cargaBarras"></div>
							</div>
							<div class="col-sm-6">
						<div id="cargaRedonda"></div>
						</div>
						<div class="col-sm-6">
						<div id="cargaRadar"></div>
						</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div> <br> 
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#cargaLineal').load('act_barras.php');
		$('#cargaBarras').load('act_lineal.php');
		$('#cargaRedonda').load('atc_redondo.php');
		$('#cargaRadar').load('act_radar.php');
	});
</script>