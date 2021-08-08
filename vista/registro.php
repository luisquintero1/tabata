<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro</title>
<link rel="stylesheet" href="css/registr.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/EstiloLogin.css">
	<meta name="google-signin-client_id" 
	content="363480282160-60k7tnl57l0ivpu603rqbuv1i8tjrg6c.apps.googleusercontent.com">	
</head>
<body class="text-center">
<form class="form-signin" method="post" action="../controlador/accion/act_registro.php">
<h1 class="h3 mb-3 font-weight-normal">Registro</h1>

<label for="nombre" class="sr-only">nombre</label>
	<input name="nombre" type="nombre" id="nombre" class="form-control" placeholder="Nombre" >
<label for="correo" class="sr-only">correo</label>
<input name="correo" type="text" id="correo" class="form-control" placeholder="Correo" autofocus>
	<label for="password" class="sr-only">password</label>
	<input name="password" type="password" id="password" class="form-control" placeholder="Contraseña" >
    <label for="telefono" class="sr-only">telefono</label>
	<input name="telefono" type="text" id="telefono" class="form-control" placeholder="telefono" >
    <label for="fechanac" class="sr-only">fechanac</label>
	<input name="fechanac" type="date" id="fechanac" name="trip-start" value="2000-02-12" min="1950-02-12"  max="2021-02-12" id="fechanac"    class="form-control" placeholder="Fecha Nacimiento" >
    <label for="sexo" class="sr-only">sexo</label>
	<input name="sexo" type="text" id="sexo" class="form-control" placeholder="sexo" >
    <label for="pesokg" class="sr-only">pesokg</label>
	<input name="pesokg" type="text" id="pesokg" class="form-control" placeholder="Peso" >
	<div class="checkbox mb-3">
    </div>
	<button class="btn btn-lg btn-primary btn-block" type="submit">
		<h8>Registrar</h8>
	</button>
</form>
<script src="js/librerias/jquery-3.3.1.min.js"></script>
	<script src="js/librerias/bootstrap.min.js" ></script>
	<script src="js/librerias/bootstrap.bundle.min.js"></script>
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<script src="js/librerias/sweetalert.min.js"></script>
	<script src="js/logica/login.js"></script>
</body>
</html>
