<?php
include "Modelo/Conexion.php";
$id=$_GET["id"];
$sql =$conexion->query( "select * from usuarios where id_usuarios=$id");
?>

<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rastrea tu transporte</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<form class="col-4 p-3 m-auto">
      <h5 class="text-center text-secondary">Modificar Usuarios</h5>
      <input type="hidden" name="id" value="<?= $_GET["id"]?>">
      <?php
      include "Controlador/Modificar.php";
      while($datos=$sql->fetch_object()){?>
            <div class="mb-1">
        <label for="exampleInputEmail1" class="form-label">Usuario</label>
        <input type="text" class="form-control" name="usuario" value="<?= $datos->usuario?>"> 
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Constraseña</label>
        <input type="text" class="form-control" name="contraseña" value="<?= $datos->contraseña?>"> 
       </div>
       <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Correo</label>
        <input type="text" class="form-control" name="correo" value="<?= $datos->correo?>"> 
       <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombres</label>
        <input type="text" class="form-control" name="nombres" value="<?= $datos->nombres?>"> 
       </div>
       <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Apellidos</label>
        <input type="text" class="form-control" name="apellido" value="<?= $datos->apellido?>">
       </div>
      
       </div>
      <?php }
      ?>
<button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar</button>
    </form>
</body>
</html>

