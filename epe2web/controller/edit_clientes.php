<?php

if (!empty ($_POST["btnregistrar"])){
  //if (!empty ($POST["nombre_cliente"]) and !empty($_POST["apellido_cliente"]) and !empty($_POST["rut_cliente"]) and !empty($_POST["seguro_cliente"])and !empty($_POST["edad_cliente"])){
# code...
$rut_cliente=$_POST["rut_cliente"];
$nombre_cliente=$_POST["nombre_cliente"];
$apellido_cliente=$_POST["apellido_cliente"];
$seguro_cliente=$_POST["seguro_cliente"];
$edad_cliente=$_POST["edad_cliente"];
$sql=$conexion->query(" UPDATE clientes set nombre_cliente='$nombre_cliente', apellido_cliente='$apellido_cliente',seguro_cliente='$seguro_cliente',edad_cliente='$edad_cliente'  where rut_cliente='$rut_cliente'");
if ($sql==1){
    header("location:../index.php");
}else{
    echo "<div class='alert alert-danger'> Error al modificar el producto</div>";
}


}else{
    echo "<div class='alert alert-warning'> Campos vacíos</div>";

  }
//}

?>