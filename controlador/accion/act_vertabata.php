<?php       session_start();

  $conexion=mysqli_connect("sql209.epizy.com","epiz_29349556","hLPDglqfPl4dtVw","epiz_29349556_tabata1");


  ?>


  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ver Tabatas</title>
	<link rel="stylesheet" href="../../vista/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../vista/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="../../vista/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="../../vista/css/tabla.css ">
	 
	<meta name="google-signin-client_id" 
	content="363480282160-60k7tnl57l0ivpu603rqbuv1i8tjrg6c.apps.googleusercontent.com">	
</head>
<body class="text-center">      
  <br>
  <form  action="../../vista/tabata.php" method="post">  
    <input type="submit" class="btn btn-primary" value="Inicio" > </form> 

    <form  action="act_gerarpdf.php" method="post">  
    <input align="center" type="submit" class="btn btn-success" value="Generar reporte" > </form> 
    <br>
    <form  action="act_graficatabata.php" method="post">  
    <input align="center" type="submit" class="btn btn-success" value="Generar graficas" > </form> 


<h4 class="h3 mb-3 font-weight-normal">Bienvenido </h4> 
<div id="main-container">
  <table>
<?php 
  
$ses =$_SESSION['ID_USUARIO'];
  $resultados = mysqli_query($conexion,"SELECT * FROM tabata WHERE idUsuario	 ='$ses'  ");
  while($consulta = mysqli_fetch_array($resultados))
  { ?> 
      
      <?php echo "<thead>"    ?> 
  <?php echo "<tr>"   ?> 
  <?php echo "<th>" .  "Nombre:" . "</th>" . "<th>" .  "Preparacion:" . "</th>" . "<th>" . "Actividad:" .  "</th>" 
  .  "<th>" .  "Descanso:" . "</th>" .  "<th>" .  "Numero Series:" . "</th>" .  "<th>" .  "Numero De Rondas:" . "</th>" .  "<th>" .  "Editar:" . "</th>" .  "<th>" .  "Eliminar:" . "</th>"
  
  ?> 
  <?php echo "</tr>"   ?> 
  <?php echo "</thead>"    ?> 

  <?php echo "<tr>"   ?> 
  <?php echo "<td>" . $consulta['nombre']. "</td>" . "<td>" . $consulta['tPreparacion']. "</td>" . "<td>" . $consulta['tActividad']. "</td>" 
  . "<td>" . $consulta['tDescanso']. "</td>" . "<td>" . $consulta['numSeries']. "</td>" . "<td>" . $consulta['numRondas']. "</td>"  ?>
  <td> <a href="../../vista/act_editartabata.php?id=<?php echo  $consulta["id"]; ?> " class="btn btn-primary" >Editar</a>  </td> 
  <td> <a href="../../vista/eliminartabata.php?id=<?php echo  $consulta["id"]; ?> " class="table__item__link" > Eliminar</a>   </td> 
  <?php echo "</tr>"   ?> 
  
          



      <?php } ?>
      
       



      </table>
      </div> 

    
  <?php  ?>
  <script src="../../vista/js/logica/confirmirmacion.js"></script>
<script src="../../vista/js/librerias/jquery-3.3.1.min.js"></script>
	<script src="../../vista/js/librerias/bootstrap.min.js" ></script>
	<script src="../../vista/js/librerias/bootstrap.bundle.min.js"></script>
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<script src="../../vista/js/librerias/sweetalert.min.js"></script>
 
  <script src="js/logica/login.js"></script>
 
</body>
</html>