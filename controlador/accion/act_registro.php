<?php
  $conexion=mysqli_connect("sql209.epizy.com","epiz_29349556","hLPDglqfPl4dtVw","epiz_29349556_tabata1");

 
if(strlen($_POST['nombre'])>=1 && strlen($_POST['correo'])>=1 && strlen($_POST['password'])>=1 && strlen($_POST['telefono'])>=1 && 
strlen($_POST['fechanac'])>=1 && strlen($_POST['sexo'])>=1 && strlen($_POST['pesokg'])>=1 ){

 $nombre=trim($_POST['nombre']);
 $correo=trim($_POST['correo']);
 $password=trim($_POST['password']);
 $telefono=trim($_POST['telefono']);
 $fechanac=trim($_POST['fechanac']);
 $sexo=trim($_POST['sexo']);
 $pesokg=trim($_POST['pesokg']);
 $consulta="INSERT INTO usuario(nombre, correo,password, telefono, fechanac, sexo, pesokg) VALUES ('$nombre','$correo','$password','$telefono','$fechanac','$sexo','$pesokg')";
  $resultado= mysqli_query($conexion,$consulta);

  if($resultado){
    ?>
    <?php
    header("Location: ../../vista/login.php");
    
    
  }else{
    ?>
     
    <?php
        header("Location: ../../vista/registro.php");
        
  }
}else{
    ?>
    
    <?php
 header("Location: ../../vista/registro.php");
 
  }
?>