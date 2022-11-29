<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rastrea tu trasnporte</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/ff8433d55d.js" crossorigin="anonymous"></script>
</head>

<body>
  <script>
    function eliminar(){
      var respuesta = confirm("Seguro de eliminar ususario?");
      return respuesta
    }
  </script>
  <h1 class="text-center p-3">Listado de usuarios</h1>
  <?php
  include "Modelo/Conexion.php";
  include "Controlador/Eliminar.php";
  ?>
  <div class="container-fluid row">
    <form class="col-4 p-3" method="POST">
      <h3 class="text-center text-secondary">Registro de usuarios</h3>
      <?php
      include "Modelo/Conexion.php";
      include "Controlador/Registro_persona.php";
      ?>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Usuario</label>
        <input type="text" class="form-control" name="usuario">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Constraseña</label>
        <input type="text" class="form-control" name="contraseña">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Correo</label>
        <input type="text" class="form-control" name="correo">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombres</label>
        <input type="text" class="form-control" name="nombres">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Apellidos</label>
        <input type="text" class="form-control" name="apellido">
      </div>
      </div>

      <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registro</button>
    </form>
    <div class="col-8 p-4">
      <table class="table">
        <thead class="bg-info">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Usuario</th>
            <th scope="col">Contraseña</th>
            <th scope="col">Correo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
            include "Modelo/Conexion.php";
            $sql = $conexion->query(" select * from usuarios ");
            while ($datos = $sql->fetch_object()) { ?>
            <td><?= $datos -> id_usuarios ?></td>
            <td><?= $datos -> usuario ?></td>
            <td><?= $datos -> contraseña ?></td>
            <td><?= $datos -> correo ?></td>
            <td><?= $datos -> nombres ?></td>
            <td><?= $datos -> apellido ?></td>
            <td>
              <a href="Modificar.php?id=<?=$datos->id_usuarios?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
              <a onclick="return eliminar()"href="Index.php?id=<?=$datos -> id_usuarios?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>

            </td>
          </tr>
          <?php
             ?>

          <?php }
            ?>
        </tbody>
      </table>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>