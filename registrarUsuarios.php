<?php

    include("BaseDatos.php");

    if(isset($_POST["botonEnvio"])){
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $descripcion=$_POST["descripcion"];
        $genero=$_POST["genero"];


        $query = "insert into usuarios(nombre,apellido,descripcion,genero)
                 values ('$nombre','$apellido','$descripcion','$genero')";
                 
        //usamos la clase de conexion
        $transaccion = new BaseDatos();
        $transaccion->agregarDatos($query);
    }
?>