<?php       session_start();
if(!$_SESSION['NOMBRE_USUARIO']){
  header("Location: login.php");
}
  $conexion=mysqli_connect("sql209.epizy.com","epiz_29349556","hLPDglqfPl4dtVw","epiz_29349556_tabata1");


  ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ver Tabatas</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/tablau.css"> 
	 
	<meta name="google-signin-client_id" 
	content="363480282160-60k7tnl57l0ivpu603rqbuv1i8tjrg6c.apps.googleusercontent.com">	
</head>
<body class="text-center">      
  <br>
  <form  action="../controlador/accion/act_cerrar.php" method="post">   
    <input type="submit" class="btn btn-primary" value="salir" > </form> 

<h4 class="h3 mb-3 font-weight-normal">Bienvenido </h4> 
<div id="main-container">
  <table>
<?php 
  
$ses =$_SESSION['ID_USUARIO'];
  $resultados = mysqli_query($conexion,"SELECT * FROM usuario   ");
  
  while($consulta = mysqli_fetch_array($resultados))
  { ?> 
      
      <?php echo "<thead>"    ?> 
  <?php echo "<tr>"   ?> 
  <?php echo "<th>" .  "Nombre:" . "</th>" . "<th>" .  "Correo:" . "</th>" . "<th>" . "Password:" .  "</th>" 
  .  "<th>" .  "telefono:" . "</th>" .  "<th>" .  "Fecha nacimiento:" . "</th>" .  "<th>" .  "sexo:" . "</th>" .  "<th>" .  "Peso:" . "</th>"
  .  "<th>" .  "Administrador :" . "</th>" .  "<th>" .  "Editar:" . "</th>" .  "<th>" .  "Eliminar:" . "</th>"
  
  ?> 
  <?php echo "</tr>"   ?> 
  <?php echo "</thead>"    ?> 

  <?php echo "<tr>"   ?> 
  <?php echo "<td>" . $consulta['nombre']. "</td>" . "<td>" . $consulta['correo']. "</td>" . "<td>" . $consulta['password']. "</td>" 
  . "<td>" . $consulta['telefono']. "</td>" . "<td>" . $consulta['fechanac']. "</td>" . "<td>" . $consulta['sexo']. "</td>" . "<td>" . $consulta['pesokg']. "</td>". "<td>" . $consulta['administrador']. "</td>"  ?>
  <td> <a href="../controlador/accion/act_editarusuario.php?id=<?php echo  $consulta["id"]; ?> " class="btn btn-primary" >Editar</a>  </td> 
  <td> <a href="../controlador/accion/act_eliminarusuario.php?id=<?php echo  $consulta["id"]; ?> " class="table__item__link" > Eliminar</a>   </td> 
  <?php echo "</tr>"   ?> 
  
          



      <?php } ?>
      
       



      </table>
      </div> 

    
  <?php  ?>
  <script src="js/logica/confirmirmacion.js"></script>
<script src="../../vista/js/librerias/jquery-3.3.1.min.js"></script>
	<script src="../../vista/js/librerias/bootstrap.min.js" ></script>
	<script src="../../vista/js/librerias/bootstrap.bundle.min.js"></script>
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<script src="../../vista/js/librerias/sweetalert.min.js"></script>
 
  <script src="js/logica/login.js"></script>
 
</body>
</html>