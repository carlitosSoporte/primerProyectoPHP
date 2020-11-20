<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>CLIENTE</title>
</head>
<body>
    <header>
        <h1 class="text-center mt-5">SOLICITUD O PETICION GET</h1>
    </header>
    <main>
    <div class="container">
        <form action="servidorGET.php" method="GET">
                <div class="row mt-5">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="nombre" name="nombre" required>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="contraseña" name="password" required>
                    </div>
                </div>
                <p class="text-center"><button type="submit" class="btn btn-primary mt-4" name="botonEnviar">Enviar Paquete</button></p>
            </form>
        
        </div>
    </main>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>