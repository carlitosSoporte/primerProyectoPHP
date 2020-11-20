<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicios PHP</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Ejercicios PHP</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <form action="formularioProductos.php" method="POST">
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Producto" name="nombreProducto">
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control" placeholder="Precio" name="precioProducto">
                                </div>
                            </div>
                            <div class="row justify-content-center mt-3">
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary mb-2" name="botonEnviar">Enviar datos</button>
                                </div>
                            </div> 
                        </form>


                        <?php if(isset($_POST["botonEnviar"])):?>
                            <?php
                                $precio = $_POST["precioProducto"];
                                $nombre = $_POST["nombreProducto"];
                                
                            ?>
                            
                            <h2 class="text-danger"> <?php echo($nombre)?></h2>
                            <h2 class="text-danger"> <?php echo($precio)?></h2>
                        <?php endif ?>
                    </div>           
                </div>
            </div>
        </main>
        <footer>

        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>