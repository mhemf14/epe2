<?php
 include "../model/conexion.php";
$rut_cliente=$_GET["rut_cliente"];


$sql=$conexion->query("select * from clientes where rut_cliente=$rut_cliente");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body class="m-0 vh-100 row justify-content-center align-items-center">
<form class="col-auto text-center p-5" method="POST">
        <img src="https://www.sura.cl/Style%20Library/KitSura/img/logo_sura.png">
        <br>  <br>
        <h5 class="text-center alert alert-secondary">Editar clientes</h5>
        <input type="hidden" name="rut_cliente" id="" value="<?= $_GET["rut_cliente"]?>">
        <?php
        include "../controller/edit_clientes.php";
        while ($datos = $sql->fetch_object()){?>
            <div class="mb-3">
            <label for="exampleInputEmail" class="form-label">Nombre del cliente</label>
            <input type="text" class="form-control" name="nombre_cliente" value="<?=$datos->nombre_cliente  ?>">
     
        </div>

        <div class="mb-3 text-center">
            <label for="exampleInputEmail" class="form-label">Apellido del cliente</label>
            <input type="text" class="form-control" name="apellido_cliente" value="<?=$datos->apellido_cliente ?>">
   
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail" class="form-label">Rut del cliente</label>
            <input type="text" class="form-control" name="rut_cliente" value="<?=$datos->rut_cliente?> ">
        
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail" class="form-label">Seguro del cliente</label>
            <input type="text" class="form-control" name="seguro_cliente" value="<?=$datos->seguro_cliente ?>">
        
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail" class="form-label">Edad del cliente</label>
            <input type="text" class="form-control" name="edad_cliente" value="<?=$datos->edad_cliente ?>">
 
        </div>

        
        <?php }
        ?>
        <br>  <br>
       
        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar</button>
    </form> 
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
   
</body>
</html>
