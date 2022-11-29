<?php

if(!empty($_POST["btnregistrar"])){
   if (!empty($_POST["usuario"])and !empty($_POST["contraseña"]) and !empty($_POST["correo"]) and !empty($_POST["nombres"]) and !empty($_POST["apellido"])){
       echo "Informacion valida";

       $usuario=$_POST["usuario"];
       $contraseña=$_POST["contraseña"];
       $correo=$_POST["correo"];
       $nombres=$_POST["nombres"];
       $apellido=$_POST["apellido"];

       $sql=$conexion->query(" insert into usuarios(usuario,contraseña,correo,nombres,apellido) values('$usuario','$contraseña','$correo','$nombres''$apellido')");
       if ($sql==1) {
           echo '<div class="alert alert-succes">Usuario registrado</div>';
       } else {
        echo '<div class="alert alert-danger">Error en registro</div>';   
       }
       
   }else{
      echo '<div class="alert alert-warning ">Algun campo vacio</div>';
   }
}


?>