<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>secure</title><!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b484e05b75.js" crossorigin="anonymous"></script>
</head>

<body class="m-0 vh-100 row justify-content-center align-items-center">

    <?php
     include "model/conexion.php";
    
    
    
    ?>
    <h1 class="text-center p-3"> </h1>
    <?php
   include "controller/registro_clientes.php";
   include "controller/delete.php";

    ?>
    <div class="mb-3"></div>
    <form class="col-4 text-center p-3" method="POST">
        <img src="https://www.sura.cl/Style%20Library/KitSura/img/logo_sura.png">
        <br> <br>

        <h5 class="text-center alert alert-secondary">Ingresar clientes</h5>
        <br> <br>
        <div class="mb-3">
            <label for="exampleInputEmail" class="form-label">Nombre del cliente</label>
            <input type="text" class="form-control" name="nombre_cliente">

        </div>

        <div class="mb-3">
            <label for="exampleInputEmail" class="form-label">Apellido del cliente</label>
            <input type="text" class="form-control" name="apellido_cliente">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail" class="form-label">Rut del cliente</label>
            <input type="text" class="form-control" name="rut_cliente">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail" class="form-label">Seguro del cliente</label>
            <input type="text" class="form-control" name="seguro_cliente">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail" class="form-label">Edad del cliente</label>
            <input type="text" class="form-control" name="edad_cliente">

        </div>
        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
    </form>
    <div class="col-8 p-4">
        <table class="table">
            <thead class="bg-info">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Rut</th>
                    <th scope="col">Seguro</th>
                    <th scope="col">Edad</th>
                    <th scope="col"></th>

            </thead>
            <tbody>
                <?php
                include "model/conexion.php";
                $sql = $conexion->query("SELECT * from clientes");
                while ($datos = $sql->fetch_object()) { ?>
                    <tr>

                        <td><?= $datos->nombre_cliente ?></td>
                        <td><?= $datos->apellido_cliente ?></td>
                        <td><?= $datos->rut_cliente ?></td>
                        <td><?= $datos->seguro_cliente ?></td>
                        <td><?= $datos->edad_cliente ?></td>
                        <td>
                            <a href="vistas/edit_clientes.php?rut_cliente=<?= $datos->rut_cliente ?>" class="btn btn-small btn-warning">Editar</a>
                            <a href="index.php?rut_cliente=<?= $datos->rut_cliente ?>" class="btn btn-small btn-danger">Eliminar</a>

                        </td>
                    </tr>


                <?php }
                ?>



            </tbody>
        </table>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>

</html>
<?php
