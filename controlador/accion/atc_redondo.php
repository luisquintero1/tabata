<?php       session_start();

$conexion=mysqli_connect("sql209.epizy.com","epiz_29349556","hLPDglqfPl4dtVw","epiz_29349556_tabata1");
  $ses =$_SESSION['ID_USUARIO'];
  $resultados = mysqli_query($conexion,"SELECT * FROM tabata WHERE idUsuario	 ='$ses'  order by TDescanso ");
  $valoresY=array();//
	$valoresX=array();//
  while($consulta = mysqli_fetch_array($resultados))
  {
    $valoresY[]=$consulta[3];
    $valoresX[]=$consulta[1];
}
$datosX=json_encode($valoresX);
	$datosY=json_encode($valoresY);

  ?>
<div id="graficaRedonda"></div>
<script type="text/javascript">
	function crearCadenaredonda(json){
		var parsed = JSON.parse(json);
		var arr = [];
		for(var x in parsed){
			arr.push(parsed[x]);
		}
		return arr;
	}
</script>

<script type="text/javascript">
datosX=crearCadenaredonda('<?php echo $datosX ?>');
	datosY=crearCadenaredonda('<?php echo $datosY ?>');

	var data = [{
       
  values: datosY,
  labels: datosX,
  type: 'pie'
}];

var layout = {
    title: 'Grafico Circular del Numero de Actividades del Usuario ',
  height: 400,
  width: 500
};

Plotly.newPlot('graficaRedonda', data, layout);
</script>