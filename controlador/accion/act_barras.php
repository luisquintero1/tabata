<?php       session_start();

  $conexion=mysqli_connect("sql209.epizy.com","epiz_29349556","hLPDglqfPl4dtVw","epiz_29349556_tabata1");
  $ses =$_SESSION['ID_USUARIO'];
  $resultados = mysqli_query($conexion,"SELECT * FROM tabata WHERE idUsuario	 ='$ses'  order by TDescanso ");
  $valoresY=array();//
	$valoresX=array();//
  while($consulta = mysqli_fetch_array($resultados))
  {
    $valoresY[]=$consulta[4];
    $valoresX[]=$consulta[1];
}
$datosX=json_encode($valoresX);
	$datosY=json_encode($valoresY);

  ?>
<div id="graficaBarras"></div>
<script type="text/javascript">
	function crearCadenaBarras(json){
		var parsed = JSON.parse(json);
		var arr = [];
		for(var x in parsed){
			arr.push(parsed[x]);
		}
		return arr;
	}
</script>

<script type="text/javascript">
datosX=crearCadenaBarras('<?php echo $datosX ?>');
	datosY=crearCadenaBarras('<?php echo $datosY ?>');

	var data = [
		{
			x: datosX,
			y: datosY,
			type: 'bar',marker: {
    color: 'orange'
  }
		}
	];
    var layout = {
  title: 'Grafico de Barras del Numero de Descansos del Usuario',
  font:{
    family: 'Raleway, sans-serif'
  },
   
  xaxis: {
    tickangle: 30,
    title: 'Nombre de las Tabatas del Usuario'
  },
  yaxis: {
    title: 'Descansos del Usuario'
  }
};

Plotly.newPlot('graficaBarras', data,layout);
</script>