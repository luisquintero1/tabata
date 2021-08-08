<?php       session_start();

$conexion=mysqli_connect("sql209.epizy.com","epiz_29349556","hLPDglqfPl4dtVw","epiz_29349556_tabata1");
  $ses =$_SESSION['ID_USUARIO'];
  $resultados = mysqli_query($conexion,"SELECT * FROM tabata WHERE idUsuario	 ='$ses'  order by TDescanso ");
  $valoresY=array();//
	$valoresX=array();//
  while($consulta = mysqli_fetch_array($resultados))
  {
    $valoresY[]=$consulta[2];
    $valoresX[]=$consulta[1];
}
$datosX=json_encode($valoresX);
	$datosY=json_encode($valoresY);

  ?>
<div id="graficaRadar"></div>
<script type="text/javascript">
	function crearCadenaradar(json){
		var parsed = JSON.parse(json);
		var arr = [];
		for(var x in parsed){
			arr.push(parsed[x]);
		}
		return arr;
	}
</script>

<script type="text/javascript">
datosX=crearCadenaradar('<?php echo $datosX ?>');
	datosY=crearCadenaradar('<?php echo $datosY ?>');
    data = [{
  type: 'scatterpolar',
  r: datosY,
  theta: datosX,
  fill: 'toself'
}]

layout = {
    title: 'Grafico de Radar del Numero de Preparaciones del Usuario ',
  polar: {

    radialaxis: {
      visible: true,
      range: [0, 50]
    }
  },
  showlegend: false
}
	
Plotly.newPlot('graficaRadar', data, layout);
</script>