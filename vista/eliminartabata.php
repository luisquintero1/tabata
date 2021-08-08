<?php       session_start();
  $conexion=mysqli_connect("sql209.epizy.com","epiz_29349556","hLPDglqfPl4dtVw","epiz_29349556_tabata1");
  
  $idd = $_GET["id"];  



  
  $consulta="DELETE FROM `tabata` WHERE id='$idd'";
  $resultado= mysqli_query($conexion,$consulta);
  if($resultado){
  
    header("Location:../controlador/accion/act_vertabata.php");
    
    
  }else{
    echo"<script> alert('No se pudo eliminar'); window.history.go(-1); </script>";
        
  } 