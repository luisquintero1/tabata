<?php session_start();
if(!$_SESSION['NOMBRE_USUARIO']){
  header("Location: login.php");
  $conexion=mysqli_connect("sql209.epizy.com","epiz_29349556","hLPDglqfPl4dtVw","epiz_29349556_tabata1");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabatta</title>
  <link rel="stylesheet" href="css/css2.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<meta name="google-signin-client_id" 
	content="363480282160-60k7tnl57l0ivpu603rqbuv1i8tjrg6c.apps.googleusercontent.com">	
</head>
<body class="text-center">      
  <div> 
  <div id="derecha"> 
  <br>
  <br> <br> <br> <br> <br>
<h4 class="h3 mb-3 font-weight-normal">Bienvenido </h4> <br>


            <form  action="../controlador/accion/act_cerrar.php" method="post">  
    <input type="submit" class="btn btn-success"  value="Salir" > </form>      
    <br>
    <form class="form-signin" method="post" action="../controlador/accion/act_registrotabata.php">
   
    <div id="holaa">
 <label for="nombre" class="form-label">Nombre:</label>  <br>
    <label for="nombre" class="sr-only">nombre</label>
   	<input name="nombre" type="text" id="nombre" class="form-control" placeholder="Nombre" >
     </div>
     <br>
    <label for="tPreparacion" class="form-label">Preparacion</label>
    <input name="tPreparacion" type="range" class="form-range" min="0" max="20" id="tPreparacion"  > <span name="vale" id="vale">10</span>  <br>
    <label for="tActividad" class="form-label">Actividad</label>
    <input name="tActividad" type="range" class="form-range" min="0" max="20" id="tActividad"><span name="vale2"id="vale2">10</span> <br>
    <label for="tDescanso" class="form-label">Descanso</label>
    <input name="tDescanso" type="range" class="form-range" min="0" max="20" id="tDescanso"><span id="vale3">10</span> <br>
    <label  for="numSeries" class="form-label">Series</label>
    <input name="numSeries" type="range" class="form-range" min="0" max="10" id="numSeries"><span name="vale77" id="vale4">5</span> <br>
    <label for="numRondas" class="form-label">Rondas</label>
    <input name="numRondas" type="range" class="form-range" min="0" max="20" id="numRondas"><span id="vale5">10</span> <br>
     
    
   
    
 
    
   
    <button class="btn btn-primary" type="submit" name="formula1">
		<h8>Guardar Tabata</h8>
    </button>

    <?php 
             if(isset($_POST['formula1'])){
            $numSeries=$_POST['numSeries'];}?>

    </form>
    <form  action="../controlador/accion/act_vertabata.php" method="post">  
    <br>
    <input type="submit" class="btn btn-primary" value="Ver tabatas" > </form> 

    </div> 
      <div id="izquierda"> 
        <br> <br> <br>  <br> <br> <br>
    <div id="tiempooo" align="center">
  <div align="center" id="iniool">
  <p id="preparacion"></p>
  <p id="countdown"></p>
  </div>
  <div align="center" id="serel">Serie: <p id="Verserie"></p></div>
  <div align="center" id="rondal"> Ronda: <p id="Verondas"></p></div>
  <div align="center" id="rondal"> tiempo: <p id="sumtime"></p></div>


   </div><br><br> <br>
    <button  class="btn btn-primary"  onclick="comenzar()">Comenzar</button> -----
    <button class="btn btn-primary"   onclick="pause()">Pausa/reanudar</button>------
       <button class="btn btn-primary" onclick="detener()">Detener</button><br>
    --------------
     <div><p id="estado12"></p></div>
    <div> <p id="poll"></p></div> <br>
    <div class="col-lg-12">            
            <button id="btnNuevo" type="button" class="btn btn-success" data-toggle="modal">agregar Ejercicio</button>   
      
            </div>  
                  
<!--Modal para CRUD-->
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php ?>

            <?php  ?>  
            
            <form id="formPersonas"  method="post" action="../controlador/accion/act_guardarjercicio.php">    
            <form name="formulario1" >
			<select class="seleccion" name="cosa"   >
				<option value="0">Elige tipo de ejercicio				
			</select>
			<br>
			<select class="seleccion" id="dato" >
				<option value="-">Elegir ejercicio</option>
        <option value="1">Brazo1 </option>  <option value="2">Brazo2</option>   <option value="3">Brazo3 </option>  <option value="4">Brazo4</option>
				<option value="5">Piernas1 </option>	<option value="6">Piernas2 </option>	<option value="7">Piernas3</option> 	<option value="8">Piernas4</option>
				<option value="9">Abdomen1 </option>	<option value="10">Abdomen2</option> <option value="11">Abdomen3 </option><option value="12">Abdomen4  </option>
			</select>
			
		</form> <br>
    <form name="formulario1"  >
			<select class="seleccion" name="cosa"   >
				<option value="0">Elige tipo de ejercicio				
			</select>
			<br>
			<select class="seleccion" id="dato2"  >
				<option value="-">Elegir ejercicio
        <option value="1">Brazo1  </option>   <option value="2">Brazo2   <option value="3">Brazo3   </option> <option value="4">Brazo4 </option>
				<option value="5">Piernas1   </option>	<option value="6">Piernas2 	<option value="7">Piernas3  </option>	<option value="8">Piernas4 </option>
				<option value="9">Abdomen1  </option>	<option value="10">Abdomen2 <option value="11">Abdomen3 </option> <option value="12">Abdomen4  </option> 
			</select>
			
		</form> <br>
    <form name="formulario1"   >
			<select class="seleccion" name="cosa"   >
				<option value="0">Elige tipo de ejercicio				
			</select>
			<br>
			<select class="seleccion"   id="dato3" >
				<option value="-">Elegir ejercicio
        <option value="1">Brazo1  </option>  <option value="2">Brazo2  </option>  <option value="3">Brazo3   <option value="4">Brazo4 </option>
				<option value="5">Piernas1  </option>	<option value="6">Piernas2 </option> 	<option value="7">Piernas3 	<option value="8">Piernas4 </option>
				<option value="9">Abdomen1  </option>	<option value="10">Abdomen2  </option><option value="11">Abdomen3 <option value="12">Abdomen4   </option>
			</select>
			
		</form> <br>
    <form name="formulario1"  >
			<select class="seleccion" name="cosa"   >
				<option value="0">Elige tipo de ejercicio				
			</select>
			<br>
			<select class="seleccion" id="dato4"  >
				<option value="-">Elegir ejercicio
        <option value="1">Brazo1  </option>  <option value="2">Brazo2   <option value="3">Brazo3  </option>  <option value="4">Brazo4 </option>
				<option value="5">Piernas1  </option>	<option value="6">Piernas2 	<option value="7">Piernas3  </option>	<option value="8">Piernas4 </option>
				<option value="9">Abdomen1  </option>	<option value="10">Abdomen2 <option value="11">Abdomen3  </option> <option value="12">Abdomen4  </option> 
			</select>
			
		</form> <br>
    <form name="formulario1"  >
			<select class="seleccion" name="cosa"   >
				<option value="0">Elige tipo de ejercicio				
			</select>
			<br>
			<select class="seleccion" id="dato5"  >
				<option value="-">Elegir ejercicio
        <option value="1">Brazo1   </option>  <option value="2">Brazo2  </option>  <option value="3">Brazo3  </option>  <option value="4">Brazo4 </option>
				<option value="5">Piernas1  </option>	<option value="6">Piernas2  </option>	<option value="7">Piernas3  </option>	<option value="8">Piernas4 </option>
				<option value="9">Abdomen1  </option>	<option value="10">Abdomen2  </option><option value="11">Abdomen3  </option><option value="12">Abdomen4   </option>
			</select>
			
		</form> <br>
    <form name="formulario1"  >
			<select class="seleccion" name="cosa"   >
				<option value="0">Elige tipo de ejercicio				
			</select>
			<br>
			<select class="seleccion"  id="dato6" >
				<option value="-">Elegir ejercicio
        <option value="1">Brazo1   </option> <option value="2">Brazo2  </option>  <option value="3">Brazo3 </option>   <option value="4">Brazo4 </option>
				<option value="5">Piernas1 </option> 	<option value="6">Piernas2 </option> 	<option value="7">Piernas3  </option>	<option value="8">Piernas4 </option>
				<option value="9">Abdomen1  </option>	<option value="10">Abdomen2 </option> <option value="11">Abdomen3 </option> <option value="12">Abdomen4   </option>
			</select>
			
		</form> <br>
    <form name="formulario1"  >
			<select class="seleccion" name="cosa"   >
				<option value="0">Elige tipo de ejercicio				
			</select>
			<br>
			<select class="seleccion" id="dato7"  >
				<option value="-">Elegir ejercicio
        <option value="1">Brazo1   </option> <option value="2">Brazo2  </option>  <option value="3">Brazo3  </option>  <option value="4">Brazo4 </option>
				<option value="5">Piernas1  </option>	<option value="6">Piernas2  </option>	<option value="7">Piernas3  </option>	<option value="8">Piernas4 </option>
				<option value="9">Abdomen1  </option>	<option value="10">Abdomen2  </option><option value="11">Abdomen3  </option><option value="12">Abdomen4   </option>
			</select>
			
		</form> <br>
    <form name="formulario1"  >
			<select class="seleccion" name="cosa"   >
				<option value="0">Elige tipo de ejercicio				
			</select>
			<br>
			<select class="seleccion" id="dato8"  >
				<option value="-">Elegir ejercicio
        <option value="1">Brazo1   </option> <option value="2">Brazo2 </option>   <option value="3">Brazo3 </option>   <option value="4">Brazo4 </option>
				<option value="5">Piernas1 </option> 	<option value="6">Piernas2 </option> 	<option value="7">Piernas3 </option> 	<option value="8">Piernas4 </option>
				<option value="9">Abdomen1  </option>	<option value="10">Abdomen2  </option><option value="11">Abdomen3  </option><option value="12">Abdomen4   </option>
			</select>
			
		</form> <br>
    <form name="formulario1"  >
			<select class="seleccion" name="cosa"   >
				<option value="0">Elige tipo de ejercicio				
			</select>
			<br>
			<select class="seleccion" id="dato9"  >
				<option value="-">Elegir ejercicio
        <option value="1">Brazo1   </option> <option value="2">Brazo2   </option> <option value="3">Brazo3 </option>   <option value="4">Brazo4 </option>
				<option value="5">Piernas1 </option> 	<option value="6">Piernas2  </option>	<option value="7">Piernas3  </option>	<option value="8">Piernas4 </option>
				<option value="9">Abdomen1  </option>	<option value="10">Abdomen2  </option><option value="11">Abdomen3 </option> <option value="12">Abdomen4   </option>
			</select>
			
		</form> <br>
    <form name="formulario1"  >
			<select class="seleccion" name="cosa"   >
				<option value="0">Elige tipo de ejercicio				
			</select>
			<br>
			<select class="seleccion" id="dato10"  >
				<option value="-">Elegir ejercicio
        <option value="1">Brazo1 </option>   <option value="2">Brazo2 </option>   <option value="3">Brazo3  </option>  <option value="4">Brazo4 </option>
				<option value="5">Piernas1 </option> 	<option value="6">Piernas2 </option> 	<option value="7">Piernas3  </option>	<option value="8">Piernas4 </option>
				<option value="9">Abdomen1  </option>	<option value="10">Abdomen2 </option> <option value="11">Abdomen3 </option> <option value="12">Abdomen4   </option>
			</select>
			
		</form> 
		
    <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                  <button type="submit" id="btnGuardar" class="btn btn-dark"   onclick=" localsto(); " >Guardar</button>
                  
              </div>
			  </form>

         
         
        </div>
    </div>
</div>  
    </div> 
    </div> 
    
     
     
    <script src="js/logica/ejerci.js"></script>
	<script src="js/librerias/bootstrap.min.js" ></script>
	<script src="js/librerias/bootstrap.bundle.min.js"></script>
	
 
  
</body>
</html>