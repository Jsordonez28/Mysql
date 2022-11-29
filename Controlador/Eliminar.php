<?php

if (!empty($_GET["id"])) {
    $id=$_GET["id"];
    $sql=$conexion->query(" delete from usuarios where id_usuarios=$id ");
    if ($sql==1) {
        echo '<div class="alert alert-success">Usuario eliminado </div>';
    }else{
        echo '<div class="alert alert.danger">Erro al eliminar </div>';
    }
}

?>