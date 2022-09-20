<?php

if (!empty ($_GET["rut_cliente"])){
    $rut_cliente=$_GET["rut_cliente"];
    $sql=$conexion->query("DELETE FROM clientes WHERE rut_cliente=$rut_cliente");
    if ($sql==1){
        echo '<div class="alert alert-success">Eliminado corréctamente</div>';
    }else {
        echo '<div class="alert alert-danger"> Error</div>';
}
}
?>