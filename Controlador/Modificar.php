<?php

if(!empty($_POST["btnregistrar"])){
if (!empty($_POST["usuario"])and !empty($_POST["contraseña"]) and !empty($_POST["correo"]) and !empty($_POST["nombres"]) and !empty($_POST["apellido"])) {
   $id=$_POST["id"];
   $usuario=$_POST["usuario"];
   $contraseña=$_POST["contraseña"];
   $correo=$_POST["correo"];
   $nombres=$_POST["nombres"];
   $apellido=$_POST["apellido"];
   $sql=$conexion->query(" update usuarios set usuario='$usuario', contraseña='$contraseña',correo='$correo', nombres='$nombres', apellido='$apellido' where id_usuarios=$id");
   if ($sql==1) {
      header("location:Index.php");  
   } else {
      echo "<div class= 'alert alert-danger'> Error al modificar</div>";
   }
   
   }else{
   echo "<div class= 'alert-warning'> campos vacios </div>";
   }
}


?>

