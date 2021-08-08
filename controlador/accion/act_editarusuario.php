<?php session_start();

  $conexion=mysqli_connect("sql209.epizy.com","epiz_29349556","hLPDglqfPl4dtVw","epiz_29349556_tabata1");
  
  $idd = $_GET["id"];  

  ?>
  <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Usuario</title>
<link rel="stylesheet" href="../../vista/css/registr.css">
	<link rel="stylesheet" href="../../vista/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../vista/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="../../vista/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="../../vista/css/EstiloLogin.css">

</head>
<body class="text-center">

<form class="form-signin" method="post" action="../accion/act_al.php">

<?php 
    
    $resultados = mysqli_query($conexion,"SELECT * FROM usuario WHERE id='$idd'  "); 
    while($consulta = mysqli_fetch_assoc($resultados))
    { ?>     



<h1 class="h3 mb-3 font-weight-normal">Usuario</h1>
<input type="hidden"  name="id" class="form-control" value="<?php echo($consulta['id'])?>" >

 
      <input name="nombre" type="text" id="nombre" class="form-control" value=" <?php echo  $consulta['nombre']  ?>" >
<label for="correo" class="sr-only">correo</label>
<input name="correo" type="text" id="correo" class="form-control" placeholder="Correo" autofocus value="<?php echo($consulta["correo"])?>"  >
	<label for="password" class="sr-only">password</label>
	<input name="password" type="password" id="password" class="form-control" placeholder="Contraseña" value="<?php echo($consulta["password"])?>"  >
    <label for="telefono" class="sr-only">telefono</label>
	<input name="telefono" type="text" id="telefono" class="form-control" placeholder="telefono" value="<?php echo($consulta["telefono"])?>"  >
    <label for="fechanac" class="sr-only">fechanac</label>
	<input name="fechanac" type="date" id="fechanac" name="trip-start" value="<?php echo($consulta["fechanac"])?>"  min="1950-02-12"  max="2021-02-12" id="fechanac"    class="form-control" placeholder="Fecha Nacimiento" >
    <label for="sexo" class="sr-only">sexo</label>
	<input name="sexo" type="text" id="sexo" class="form-control" placeholder="sexo" value="<?php echo($consulta["sexo"])?>"  >
    <label for="pesokg" class="sr-only">pesokg</label>
	<input name="pesokg" type="text" id="pesokg" class="form-control" placeholder="Peso" value="<?php echo($consulta["pesokg"])?>"  >
    <label for="administrador" class="sr-only">administrador</label>
	<input name="administrador" type="text" id="administrador" class="form-control" placeholder="Administrador:SI=1, No=0" value="<?php echo($consulta["administrador"])?>"  >
    <?php } ?>
	<div class="checkbox mb-3">
    </div>
	<button class="btn btn-lg btn-primary btn-block" type="submit">
		<h8>Actualizar Usuario</h8>
	</button>
</form>
 
	<script src="js/librerias/bootstrap.min.js" ></script>
	<script src="js/librerias/bootstrap.bundle.min.js"></script>
	 
 
</body>
</html>
