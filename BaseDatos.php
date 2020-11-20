<?php
class BaseDatos{
    //atributos
    public $usuarioBD = "root";
    public $passwordBD = "";

    //constructor
    public function __construct()
    {
        
    }

    //metodos
    public function conectarBD(){
        //DEFINIR DSN(informacion generica de la BD)
        //gestorBD, nombre Servidor,nombre BD
        $infoBD = "mysql:host=localhost;dbname=tienda";

        //utilizar PDO
        

        //controlamos errores de conexion
        try{
            $conexionBD = new PDO($infoBD, $this->usuarioBD, $this->passwordBD);
            return $conexionBD;
        }
        catch(PDOException $error){
            echo($error->getMessage());
        }
    }

    public function agregarDatos($consultaSQL){
        $conexionBD = $this->conectarBD();
        $queryInsertarDatos = $conexionBD->prepare($consultaSQL);
        $resultado= $queryInsertarDatos->execute();

        if($resultado){
            echo "se ha agregado el registro";
        }
        else{
            print_r($queryInsertarDatos->errorInfo());
        }
    }

    public function consultarDatos($consultaSQL){
        $conexionBD = $this->conectarBD();
        $queryListarDatos = $conexionBD->prepare($consultaSQL);

        //FORMATO DATOS
        $queryListarDatos->setFetchMode(PDO::FETCH_ASSOC);

        $resultado = $queryListarDatos->execute();
        return ($queryListarDatos->fetchAll());
    }
}
?>