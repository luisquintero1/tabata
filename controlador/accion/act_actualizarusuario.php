<?php   session_start();
  $conexion=mysqli_connect("sql209.epizy.com","epiz_29349556","hLPDglqfPl4dtVw","epiz_29349556_tabata1");

 
    
    $id= $_POST["id"];
 $nombre=trim($_POST['nombre']);
 $correo=trim($_POST['correo']);
 $password=trim($_POST['password']);
 $telefono=trim($_POST['telefono']);
 $fechanac=trim($_POST['fechanac']);
 $sexo=trim($_POST['sexo']);
 $pesokg=trim($_POST['pesokg']);
 $administrador=trim($_POST['administrador']);

 $consulta="UPDATE `usuario` SET nombre='$nombre',correo='$correo',password='$password',telefono='$telefono',fechanac='$fechanac',sexo='$sexo',pesokg='$pesokg',administrador='$administrador' WHERE id=$id";
 $resultado= mysqli_query($conexion,$consulta);

  if($resultado){
    ?>
    <?php
     
     header("Location:../accion/act_actualizarusuario.php");
    
    
  }else{
    ?>
      <p>Hay un dato mal ingresado</p>
    <?php
       
        
  }
  
?>