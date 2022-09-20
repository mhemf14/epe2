<?php

if(!empty($_POST["btnregistrar"])) {
    if(!empty($_POST["nombre_cliente"]) and !empty($_POST["apellido_cliente"]) and !empty($_POST["rut_cliente"])and !empty($_POST["seguro_cliente"]) and !empty($_POST["edad_cliente"])){
        
        $nombre_cliente=$_POST["nombre_cliente"];
        $apellido_cliente=$_POST["apellido_cliente"];
        $rut_cliente=$_POST["rut_cliente"];
        $seguro_cliente=$_POST["seguro_cliente"];
        $edad_cliente=$_POST["edad_cliente"];
        
        $sql=$conexion->query("insert into clientes(nombre_cliente,apellido_cliente,rut_cliente,seguro_cliente,edad_cliente)values('$nombre_cliente','$apellido_cliente','$rut_cliente','$seguro_cliente','$edad_cliente')");

        if($sql==1){
            echo '<div class="alert alert-succes">Cliente registrado</div>';

        }else{
            echo '<div class="alert alert-danger">Error</div>';
        }
    }else{
        echo '<div class="alert alert-warning">alguno de los campos está vacío</div>';
    }

}
?>