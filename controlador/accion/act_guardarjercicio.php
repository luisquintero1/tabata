<?php       session_start();
  $conexion=mysqli_connect("sql209.epizy.com","epiz_29349556","hLPDglqfPl4dtVw","epiz_29349556_tabata1");
  $ses =$_SESSION['ID_USUARIO'];

  $dato = (isset($_POST['dato'])) ? $_POST['dato'] : '';
$dato2 = (isset($_POST['dato2'])) ? $_POST['dato2'] : '';
$dato3 = (isset($_POST['dato3'])) ? $_POST['dato3'] : '';
$dato4 = (isset($_POST['dato4'])) ? $_POST['dato4'] : '';
$dato5 = (isset($_POST['dato5'])) ? $_POST['dato5'] : '';
$dato6 = (isset($_POST['dato6'])) ? $_POST['dato6'] : '';
$dato7 = (isset($_POST['dato7'])) ? $_POST['dato7'] : '';
$dato8 = (isset($_POST['dato8'])) ? $_POST['dato8'] : '';
$dato9 = (isset($_POST['dato9'])) ? $_POST['dato9'] : '';
$dato10 = (isset($_POST['dato10'])) ? $_POST['dato10'] : '';

$consulta="INSERT INTO `ejerciciotabata`(`idUsuario`, `ejercicio1`, `ejercicio2`, `ejercicio3`, `ejercicio4`, `ejercicio5`, `ejercicio6`, `ejercicio7`, `ejercicio8`, `ejercicio9`, `ejercicio10`) VALUES ('$ses','$dato','$dato2','$dato3','$dato4','$dato5','$dato6','$dato7','$dato8','$dato9','$dato10')";

  $resultado= mysqli_query($conexion,$consulta);
  if($resultado){
  
    
    echo"<script> alert(' se  guardardo'); window.history.go(-1); </script>";
    
  }else{
    echo"<script> alert('No se pudo guardar'); window.history.go(-1); </script>";
        
  }