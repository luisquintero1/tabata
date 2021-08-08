<?php       session_start();

  $conexion=mysqli_connect("sql209.epizy.com","epiz_29349556","hLPDglqfPl4dtVw","epiz_29349556_tabata1");
  $ses =$_SESSION['ID_USUARIO'];
  $resultados = mysqli_query($conexion,"SELECT * FROM tabata WHERE idUsuario	 ='$ses'  order by numSeries ");
  $valoresY=array();//
	$valoresX=array();//
  while($consulta = mysqli_fetch_array($resultados))
  {
    $valoresY[]=$consulta[5];
    $valoresX[]=$consulta[1];
}
$datosX=json_encode($valoresX);
	$datosY=json_encode($valoresY);
?>
<div id="graficaLineal"></div>

<script type="text/javascript">
	function crearCadenaLineal(json){
		var parsed = JSON.parse(json);
		var arr = [];
		for(var x in parsed){
			arr.push(parsed[x]);
		}
		return arr;
	}
</script>

<script type="text/javascript">

datosX=crearCadenaLineal('<?php echo $datosX ?>');
	datosY=crearCadenaLineal('<?php echo $datosY ?>');


	var trace1 = {
		x: datosX,
		y: datosY,
		type: 'scatter',
        line: {
      color: 'red',
      width: 1
    }, marker: {
    color: 'rgb(164, 194, 244)',
    size: 9,
}};
var layout = {
  title: 'Grafica Lineal del Numero de Series del Usuario',
  xaxis: {
    title: 'Nombre de las Tabatas del Usuario'
  },
  yaxis: {
    title: 'Descansos del Usuario'
  }
};

	var data = [trace1];

Plotly.newPlot('graficaLineal', data,layout);

</script>