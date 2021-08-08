<?php       session_start();
  $conexion=mysqli_connect("sql209.epizy.com","epiz_29349556","hLPDglqfPl4dtVw","epiz_29349556_tabata1");
  

  
  if(strlen($_POST['nombre'])>=1 && strlen($_POST["tPreparacion"])>=1 &&  strlen($_POST["tActividad"])>=1 && strlen($_POST['tDescanso'])>=1  && 
  strlen($_POST['numSeries'])>=1 && strlen($_POST['numRondas'])>=1  ){
    $ses =$_SESSION['ID_USUARIO'];

     $id=trim($_POST['id']);
  $nombre=trim($_POST['nombre']);
   $tPreparacion=trim($_POST['tPreparacion']);
   $tActividad=trim($_POST['tActividad']);
   $tDescanso=trim($_POST['tDescanso']);
   $numSeries=trim($_POST['numSeries']);
   $numRondas=trim($_POST['numRondas']);
   $idUsuario=($_POST['idUsuario']);
   
   $consulta="UPDATE `tabata` SET nombre='$nombre',tPreparacion='$tPreparacion',tActividad='$tActividad',tDescanso='$tDescanso',numSeries='$numSeries',numRondas='$numRondas' WHERE id=$id";
   
   
   $resultado= mysqli_query($conexion,$consulta);
  
    if($resultado){
      ?> 
      
      <?php
      header("Location:../accion/act_vertabata.php");
      
      
    }else{
      ?>
       <p>Hay un dato mal ingresado</p>
      <?php
          
          
    }
  }else{
      ?>
   <p>Por Favor llene el formulario completamente</p>   
      <?php
   
   
    }
  ?>