<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Usuarios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <?php
    include("BaseDatos.php");

    $transaccion = new BaseDatos();
    $consultaSQL = "SELECT * FROM usuarios";
    $datosDevueltos = $transaccion->consultarDatos($consultaSQL);
    print_r($datosDevueltos);
    ?>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3">
            <?php foreach ($datosDevueltos as $fila) : ?>
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $fila["nombre"] ?></h5>
                            <p class="card-text"><?= $fila["apellido"] ?><p class="lead"></p>
                            <p class="card-text"><?= $fila["descripcion"] ?><p class="lead"></p>
                            <p class="card-text"><?= $fila["genero"] ?><p class="lead"></p>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>